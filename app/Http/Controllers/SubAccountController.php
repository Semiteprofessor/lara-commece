<?php

namespace App\Http\Controllers;

use App\Models\SubAccount;
use App\Http\Requests\StoreSubAccountRequest;
use App\Http\Requests\UpdateSubAccountRequest;

class SubAccountController extends Controller
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
    public function store(StoreSubAccountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SubAccount $subAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubAccountRequest $request, SubAccount $subAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubAccount $subAccount)
    {
        //
    }
}
