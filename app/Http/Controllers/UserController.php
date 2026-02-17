<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     dd('index UserController');      //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('user/CreateUser'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('store UserController');      //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     dd('show UserController');      //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     dd('edit UserController');      //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     dd('update UserController');      //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     dd('destroy UserController');      //
    // }
}
