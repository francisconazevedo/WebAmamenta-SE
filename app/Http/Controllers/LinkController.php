<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();

        return view('link.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('link.create');
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
            'title' => 'required',
            'link' => 'required|size:500',
            'description' => 'required|size:200',
        ]);

        Link::create($request->all());

        Session::flash('flash_message', 'Link adicionado com sucesso!');

        $links = Link::all();
        return view('link.index', compact('links'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        return $link;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Link::where('id', $id)->first();
        return view('link.edit', compact('link'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required|size:500',
            'description' => 'required|size:200',
        ]);


        $link->update($request->all());

        Session::flash('flash_message', 'Link editado com sucesso!');
        return redirect()->route('links.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        Session::flash('flash_message', 'Link removido com sucesso!');
        return redirect()->route('links.index');
    }

    public function showLink()
    {
        return Link::all();

    }
}
