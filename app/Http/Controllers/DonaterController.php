<?php

namespace App\Http\Controllers;

use App\Models\Donater;
use Illuminate\Http\Request;

class DonaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return null;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return null;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'second_name' => 'required',
            'cep' => 'required',
            'address' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'contact' => 'required',
        ]);

        $donater = Donater::create($request->all());

        return $donater;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donater  $donater
     * @return \Illuminate\Http\Response
     */
    public function show(Donater $request)
    {
        return $request;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donater  $donater
     * @return \Illuminate\Http\Response
     */
    public function edit(Donater $request)
    {
        return $request;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donater  $donater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donater $donater)
    {
        return [$request, $donater];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donater  $donater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donater $donater)
    {
        return $donater;
    }
}
