<?php

namespace App\Http\Controllers;

use App\Models\Colors;
use App\Http\Requests\StoreColorsRequest;
use App\Http\Requests\UpdateColorsRequest;

class ColorsController extends Controller
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
    public function store(StoreColorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Colors $colors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColorsRequest $request, Colors $colors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colors $colors)
    {
        //
    }
}
