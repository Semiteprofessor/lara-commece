<?php

namespace App\Http\Controllers;

use App\Models\EmailConfig;
use App\Http\Requests\StoreEmailConfigRequest;
use App\Http\Requests\UpdateEmailConfigRequest;

class EmailConfigController extends Controller
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
    public function store(StoreEmailConfigRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmailConfig $emailConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailConfigRequest $request, EmailConfig $emailConfig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailConfig $emailConfig)
    {
        //
    }
}
