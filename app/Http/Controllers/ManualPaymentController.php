<?php

namespace App\Http\Controllers;

use App\Models\ManualPayment;
use App\Http\Requests\StoreManualPaymentRequest;
use App\Http\Requests\UpdateManualPaymentRequest;

class ManualPaymentController extends Controller
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
    public function store(StoreManualPaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ManualPayment $manualPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateManualPaymentRequest $request, ManualPayment $manualPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ManualPayment $manualPayment)
    {
        //
    }
}
