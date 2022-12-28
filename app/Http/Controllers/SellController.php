<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Sell;
use App\Http\Requests\SellRequest;
use App\Payment;
use App\User;

class SellController extends Controller
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
        $sales = Sell::all();
        return view('admin.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sell = new Sell();
        $clients = User::all();
        $coupons = Coupon::all();
        $payments = Payment::all();
        return view('admin.sales.create', compact('sell', 'clients', 'coupons', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellRequest $request)
    {
        dd($request->all());
        Sell::create($request->all());
        return redirect()->route('sales.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sell $sell)
    {
        $clients = User::all();
        $coupons = Coupon::all();
        $payments = Payment::all();
        return view('admin.sales.show', compact('sell', 'clients', 'coupons', 'payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell $sell)
    {
        $clients = User::all();
        $coupons = Coupon::all();
        $payments = Payment::all();
        return view('admin.sales.edit', compact('sell', 'clients', 'coupons', 'payments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SellRequest $request, Sell $sell)
    {
        $sell->update($request->all());
        return redirect()->route('sales.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell $sell)
    {
        $sell->delete();
        return redirect()->route('sales.index')->with('success', true);
    }
}
