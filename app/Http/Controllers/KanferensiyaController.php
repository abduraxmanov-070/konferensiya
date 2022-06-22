<?php

namespace App\Http\Controllers;

use App\Models\Konferensiya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $img = time().'.jpg';
        $path = 'assets/img/logo/';
        $request->logo->move($path, $img);
        $konferensiya->create([
            'logo' => $img,
            'vazirliklar' => $request['vazirliklar'],
            'filial' => $request['filial'],
            'manzil' => $request['manzil'],
            'veb_sayt' => $request['veb_sayt'],
            'telefon' => $request['telefon'],
            'kimga' => $request['kimga'],
            'email' => $request['email'],
            'shot_raqam' => $request['shot_raqam'],
        ]);
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
        if ($request->logo == NULL) $img = $konferensiya->logo;
        else {
            File::delete(public_path('assets/img/logo/'.$konferensiya->log));
            $img = time().'.jpg';
            $path = 'assets/img/logo/';
            $request->logo->move($path, $img);
        }

        $konferensiya->update([
            'logo' => $img,
            'vazirliklar' => $request['vazirliklar'],
            'filial' => $request['filial'],
            'manzil' => $request['manzil'],
            'veb_sayt' => $request['veb_sayt'],
            'telefon' => $request['telefon'],
            'kimga' => $request['kimga'],
            'email' => $request['email'],
            'shot_raqam' => $request['shot_raqam'],
        ]);
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
        File::delete(public_path('assets/img/logo/'.$konferensiya->log));
        $konferensiya->delete();
        return redirect()->route('konferensiya.index');
    }
}
