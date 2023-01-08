<?php

namespace App\Http\Controllers;

use App\Sale;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $qtdSale = Sale::count();
        return view('dashboard', compact('qtdSale'));
    }
}
