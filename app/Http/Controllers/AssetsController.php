<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vm;


class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $assets = Vm::all();
        return view('control_panel/assets',compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'vm_name' => ['required', 'string', 'max:255'],
            'vm_ethernet' => ['required', 'string', 'max:255'],
            'vm_ip' => ['required', 'string', 'max:255'],
            'vm_gateway' => ['required', 'string', 'max:255'],
            'vm_name_server'  => ['required', 'string', 'max:255'],
            'vm_vlan' => ['required', 'string', 'max:255'],
            'vm_host' => ['required', 'string', 'max:255'],
            'vm_hostname' => ['required', 'string', 'max:255'],
            'vm_os' => ['required', 'string', 'max:255'],
            'vm_kernel' => ['required', 'string', 'max:255'],
            'note' => ['required', 'string', 'max:255']
        ]);

        Vm::create($request->all());
        // Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        dd($request->all());
        // return redirect()->route('assets.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
