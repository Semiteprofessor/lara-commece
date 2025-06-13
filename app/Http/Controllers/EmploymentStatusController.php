<?php

namespace App\Http\Controllers;

use App\Models\EmploymentStatus;
use App\Http\Requests\StoreEmploymentStatusRequest;
use App\Http\Requests\UpdateEmploymentStatusRequest;

class EmploymentStatusController extends Controller
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
    public function store(StoreEmploymentStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmploymentStatus $employmentStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmploymentStatusRequest $request, EmploymentStatus $employmentStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmploymentStatus $employmentStatus)
    {
        //
    }
}
