<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\User;
use App\Produtos;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $data = $request->get('name', 'email', 'password');
        $data['password'] = bcrypt($data['password']);
        
        $user = User::create($data);

        if ($request->get('user_type') == 0) {
            $user->client()->syncWithoutDetaching($request->get('CPF', 'telephone'));
        } else {
            $user->provider()->syncWithoutDetaching($request->get('CNPJ'));
        }
        $user->save();

        return redirect()->route('users.index')->with('sucess', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->except('produtos_id');
        $data['password'] = bcrypt($data['password']);

        $user->update($data);
        $user->produtos()->syncWithoutDetaching($request->produtos_id);
        $user->save();

        return redirect()->route('users.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('sucess', true);
    }
}
