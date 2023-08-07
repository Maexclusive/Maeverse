<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ngrox;
Use Alert;
use DB;

class NgrokTunnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ngrox = DB::table('tunel_ngrox')->get();
        return view('control_panel/NgrokTunnel',compact('ngrox'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('Ngroktunnel.index',compact('Ngroktunnel'));
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
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'host' => ['required', 'string', 'max:255'],
            'port' => ['required', 'string', 'max:255']
        ]);

        Ngrox::create($request->all());
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('Ngroktunnel.index');
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
    public function destroy($tgk_id)
    {
        $ans = Ngrox::find($tgk_id);
        $ans->delete();
        return redirect()->route('Ngroktunnel.index')
                 ->with('success','User deleted successfully');
    }
}
