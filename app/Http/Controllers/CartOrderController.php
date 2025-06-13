<?php

namespace App\Http\Controllers;

use App\Models\CartOrder;
use App\Http\Requests\StoreCartOrderRequest;
use App\Http\Requests\UpdateCartOrderRequest;

class CartOrderController extends Controller
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
    public function store(StoreCartOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CartOrder $cartOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartOrderRequest $request, CartOrder $cartOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartOrder $cartOrder)
    {
        //
    }
}
