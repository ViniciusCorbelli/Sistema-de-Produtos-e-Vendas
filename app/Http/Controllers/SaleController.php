<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Payment;
use App\Product;
use App\Sale;
use App\User;
use Illuminate\Http\Request;

class SaleController extends Controller
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
        $sales = Sale::all();
        return view('admin.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sale = new Sale();
        $clients = User::join('clients', 'clients.user_id', '=', 'users.id')->get();
        $coupons = Coupon::all();
        $payments = Payment::all();
        $products = Product::all();
        return view('admin.sales.create', compact('sale', 'clients', 'coupons', 'payments', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sale::create($request->all());
        return redirect()->route('sales.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        $clients = User::join('clients', 'clients.user_id', '=', 'users.id')->get();
        $coupons = Coupon::all();
        $payments = Payment::all();
        $products = Product::all();
        return view('admin.sales.show', compact('sale', 'clients', 'coupons', 'payments', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $clients = User::join('clients', 'clients.user_id', '=', 'users.id')->get();
        $coupons = Coupon::all();
        $payments = Payment::all();
        $products = Product::all();
        return view('admin.sales.edit', compact('sale', 'clients', 'coupons', 'payments', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        $sale->update($request->all());
        return redirect()->route('sales.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index')->with('success', true);
    }
}
