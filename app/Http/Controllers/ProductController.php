<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Http\Requests\ProductRequest;
use App\Provider;

class ProductController extends Controller
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
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $categories = Category::all();
        $brands = Brand::all();
        $providers = Provider::all();
        return view('admin.products.create', compact('product', 'categories', 'brands', 'providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $categoria = Product::create($request->except('provider_id'));
        $providers = [];
        if($request->provider_id != null){
            foreach ($request->provider_id as $provider) {
                $providers[] = Provider::find($provider);
            }
    
            $categoria->providers()->saveMany($providers);
        }

        if($request->images != null){
            foreach ($request->images as $image) {
                $categoria->images()->create($image);
            }
        }

        $categoria->save();

        return redirect()->route('products.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $providers = Provider::all();
        return view('admin.products.show', compact('product', 'categories', 'brands', 'providers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $providers = Provider::all();
        return view('admin.products.edit', compact('product', 'categories', 'brands', 'providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->except('provider_id'));

        $providers = [];
        if($request->produto_id != null){
            foreach ($request->provider_id as $provider) {
                $providers[] = Provider::find($provider);
            }
            $product->providers()->saveMany($providers);
        } 
        $product->providers()->whereNotIn('id', $request->provider_id ?? [0])->delete();

        if($request->produto_id != null){
            foreach ($request->images as $image) {
                $product->images()->createOrUpdate($image);
            }
        } 
        $product->images()->whereNotIn('url', $request->image ?? [0])->delete();
        
        return redirect()->route('products.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', true);
    }
}
