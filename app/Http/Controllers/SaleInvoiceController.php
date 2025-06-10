<?php

namespace App\Http\Controllers;

use App\Models\SaleInvoice;
use App\Http\Requests\StoreSaleInvoiceRequest;
use App\Http\Requests\UpdateSaleInvoiceRequest;

class SaleInvoiceController extends Controller
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
    public function store(StoreSaleInvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SaleInvoice $saleInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleInvoiceRequest $request, SaleInvoice $saleInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SaleInvoice $saleInvoice)
    {
        //
    }
}
