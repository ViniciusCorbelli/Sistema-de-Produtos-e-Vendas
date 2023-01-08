<?php

namespace App\Http\Controllers;

use App\Client;
use App\Provider;
use App\User;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $data = $request->only('name', 'email', 'password');
        $data['password'] = bcrypt($data['password']);
        
        $user = User::create($data);

        if ($request->get('user_type') == 1) {
            $data = $request->only('CPF', 'telephone');
            $data['user_id'] = $user->id;
            $user->client()->create($data);
        } else {
            $data = $request->only('CNPJ');
            $data['user_id'] = $user->id;
            $user->provider()->create($request->only('CNPJ'));
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
        $client = Client::where('user_id', $user->id)->first();
        $provider = Provider::where('user_id', $user->id)->first();
        return view('admin.users.show', compact('user', 'client', 'provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $client = Client::where('user_id', $user->id)->first();
        $provider = Provider::where('user_id', $user->id)->first();
        return view('admin.users.edit', compact('user', 'client', 'provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->only('name', 'email', 'password');
        $data['password'] = bcrypt($data['password']);

        $user->update($data);

        foreach(Client::where('user_id', $user->id)->get() as $user) {
            $user->delete();
        }
        foreach(Provider::where('user_id', $user->id)->get() as $user) {
            $user->delete();
        }
        
        if ($request->get('user_type') == 1 || $request->get('user_type') == 'Cliente') {
            $data = $request->only('CPF', 'telephone');
            $data['user_id'] = $user->id;
            $user->client()->create($data);
        } else {
            $data = $request->only('CNPJ');
            $data['user_id'] = $user->id;
            $user->provider()->create($request->only('CNPJ'));
        }
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
