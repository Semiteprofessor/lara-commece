<?php

namespace App\Http\Controllers;

use App\Models\CartOrderProduct;
use App\Http\Requests\StoreCartOrderProductRequest;
use App\Http\Requests\UpdateCartOrderProductRequest;

class CartOrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartOrderProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CartOrderProduct $cartOrderProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartOrderProductRequest $request, CartOrderProduct $cartOrderProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartOrderProduct $cartOrderProduct)
    {
        //
    }
}
