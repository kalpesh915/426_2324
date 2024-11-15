<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response([
            "message" => "Index Function Called"
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return response([
            "message" => "Create Function Called"
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return response([
            "message" => "Store Function Called"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response([
            "message" => "Show Function Called"
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return response([
            "message" => "Edit Function Called"
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return response([
            "message" => "Update Function Called"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return response([
            "message" => "Destroy Function Called"
        ], 200);
    }
}
