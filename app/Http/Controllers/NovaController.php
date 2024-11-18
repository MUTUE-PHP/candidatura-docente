<?php

namespace App\Http\Controllers;

use App\Models\Nova;
use Illuminate\Http\Request;

class NovaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['auxiliar'] = Nova::all();
        return inertia('ma', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Nova $nova)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nova $nova)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nova $nova)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nova $nova)
    {
        //
    }
}
