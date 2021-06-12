<?php

namespace App\Http\Controllers;

use App\Models\Milkbank;
use Illuminate\Http\Request;

class MilkbankController extends Controller
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
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Milkbank  $milkbank
     * @return \Illuminate\Http\Response
     */
    public function show(Milkbank $milkbank)
    {
        return $milkbank;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Milkbank  $milkbank
     * @return \Illuminate\Http\Response
     */
    public function edit(Milkbank $milkbank)
    {
        return $milkbank;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Milkbank  $milkbank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Milkbank $milkbank)
    {
        return [$request, $milkbank];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Milkbank  $milkbank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Milkbank $milkbank)
    {
        return null;
    }
}
