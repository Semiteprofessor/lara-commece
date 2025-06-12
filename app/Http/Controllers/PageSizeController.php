<?php

namespace App\Http\Controllers;

use App\Models\PageSize;
use App\Http\Requests\StorePageSizeRequest;
use App\Http\Requests\UpdatePageSizeRequest;

class PageSizeController extends Controller
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
    public function store(StorePageSizeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PageSize $pageSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageSizeRequest $request, PageSize $pageSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageSize $pageSize)
    {
        //
    }
}
