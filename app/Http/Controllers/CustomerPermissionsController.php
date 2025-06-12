<?php

namespace App\Http\Controllers;

use App\Models\CustomerPermissions;
use App\Http\Requests\StoreCustomerPermissionsRequest;
use App\Http\Requests\UpdateCustomerPermissionsRequest;

class CustomerPermissionsController extends Controller
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
    public function store(StoreCustomerPermissionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerPermissions $customerPermissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerPermissionsRequest $request, CustomerPermissions $customerPermissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerPermissions $customerPermissions)
    {
        //
    }
}
