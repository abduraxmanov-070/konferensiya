<?php

namespace App\Http\Controllers;

use App\Models\Konferensiya;
use Illuminate\Http\Request;

class KanferensiyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konferensiya = Konferensiya::OrderBy('id','DESC')->get();
        return view('admin.konferensiya.index',[
            'konferensiyalar' => $konferensiya,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.konferensiya.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Konferensiya $konferensiya)
    {
        $konferensiya->create($request->all());
        return redirect()->route('konferensiya.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Konferensiya $konferensiya)
    {
        return view('admin.konferensiya.edit' ,[
        'konferensiya' => $konferensiya,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konferensiya $konferensiya)
    {
        $konferensiya->update($request->all());
        return redirect()->route('konferensiya.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konferensiya $konferensiya)
    {
        $konferensiya->delete();
        return redirect()->route('konferensiya.index');
    }
}
