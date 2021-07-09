<?php

namespace App\Http\Controllers;

use App\Models\MythOrTruth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;

class MythOrTruthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados = MythOrTruth::all();

        return view('mythsortruths.index', compact('resultados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mythsortruths.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'assumption' => 'required',
            'response' => 'required',
            'response_bool' => 'required',
        ]);

        MythOrTruth::create($request->all());

        Session::flash('flash_message', 'Informação adicionado com sucesso!');

        $resultados = MythOrTruth::all();
        return view('mythsortruths.index', compact('resultados'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MythOrTruth $mythOrTruth
     * @return \Illuminate\Http\Response
     */
    public function show(MythOrTruth $mythOrTruth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MythOrTruth $mythOrTruth
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mythOrTruth = MythOrTruth::where('id', $id)->first();
        return view('mythsortruths.edit', compact('mythOrTruth'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MythOrTruth $mythOrTruth
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, MythOrTruth $mythOrTruth)
    {
        $request->validate([
            'assumption' => 'required',
            'response' => 'required',
            'response_bool' => 'required',
        ]);
        $mot = MythOrTruth::find($request->input('id'));

        $mot->assumption = $request->input('assumption');
        $mot->response = $request->input('response');
        $mot->response_bool = $request->input('response_bool');

        $mot->save();

        Session::flash('flash_message', 'Informação editada com sucesso!');
        return redirect()->route('mythsortruths.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MythOrTruth $mythOrTruth
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($mythOrTruth)
    {
        $mot = MythOrTruth::find($mythOrTruth);

        $mot->delete();

        Session::flash('flash_message', 'Informação removida com sucesso!');

        return redirect()->route('mythsortruths.index');
    }

    public function showMot()
    {
        return MythOrTruth::all();
    }
}
