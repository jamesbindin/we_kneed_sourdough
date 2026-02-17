<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     dd('index UserSession');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('session/Login'); 

        // dd('create UserSession');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('store UserSession');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     dd('show UserSession');
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     dd('edit UserSession');
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     dd('update UserSession');
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('destroy UserSession');
        //
    }
}
