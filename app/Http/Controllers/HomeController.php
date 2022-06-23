<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Konferensiya;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
//        dd($id);
        if ($id == NULL) return redirect()->route('login');
        else   return view('admin.dashboard');
    }

    public function welcome()
    {
        $konferensiya = Konferensiya::all()->last();
        $info = Info::all()->last();
//        dd($konferensiya);
        return view('welcome', [
            'konferensiya' => $konferensiya,
            'info' => $info
        ]);
    }

    public function download()
    {
        $konferensiya = Konferensiya::all()->last();
        $info = Info::all()->last();
        $pdf = Pdf::loadView('welcome', compact('konferensiya'), compact('info'))->setOptions(['defaultFont' => 'Times New Roman']);
        return $pdf->download('conference.pdf');
    }
}
