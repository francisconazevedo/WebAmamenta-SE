<?php

namespace App\Http\Controllers;

use App\Models\Milkbank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MilkbankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $milkbanks = Milkbank::all();

        return view('milkbank.index', compact('milkbanks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('milkbank.create');
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
            'cep' => 'required',
            'address' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'contact' => 'required',
        ]);

        Milkbank::create($request->all());

        Session::flash('flash_message', 'Milkbank adicionado com sucesso!');

        $milkbanks = Milkbank::all();
        return view('milkbank.index', compact('milkbanks'));
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
    public function edit($id)
    {
        $milkbank = Milkbank::where('id', $id)->first();
        return view('milkbank.edit', compact('milkbank'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Milkbank $milkbank)
    {
        $request->validate([
            'name' => 'required',
            'cep' => 'required',
            'address' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'contact' => 'required',
        ]);
        $milkbank->update($request->all());

        Session::flash('flash_message', 'Milkbank editado com sucesso!');
        return redirect()->route('milkbanks.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Milkbank $milkbank)
    {
        $milkbank->delete();

        Session::flash('flash_message', 'Milkbank removido com sucesso!');
        return redirect()->route('milkbanks.index');
    }
}
