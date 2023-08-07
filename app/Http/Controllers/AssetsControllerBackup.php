<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vm;

class AssetsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $assets = Vm::all();
        return view('control_panel/assets',compact('assets'));
    }
}
