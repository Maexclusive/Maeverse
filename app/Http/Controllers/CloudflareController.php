<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cloudflare;
use App\Models\CloudflareDomain;
use DB;
Use Alert;


class CloudflareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cloud = DB::table('tunel_cloudflared')
            ->join('cloudflare_domain', 'tunel_cloudflared.cfd_id', '=', 'cloudflare_domain.cfd_id')
            ->select('tunel_cloudflared.*', 'cloudflare_domain.*')
            ->get();
            // dd($cloud); 
        $domains = DB::table('cloudflare_domain')->get();
        return view('control_panel/Cloudflare',compact('cloud','domains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('Cloudflare.index',compact('cloud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $domain = CloudflareDomain::create($request->all());
        $cloud = Cloudflare::create([
        'cfd_id' => $domain->cfd_id,
        'tunel_name' => $request->tunel_name,
        'tunel_host' => $request->tunel_host,
        'tunel_type' => $request->tunel_type,
        'tunel_login_users' => $request->tunel_login_users,
        'tunel_login_password' => $request->tunel_login_password,
        'tunel_login_key' => $request->tunel_login_key
        ]);
        
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('Cloudflare.index');
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
    public function destroy(Cloudflare $Cloudflare)
    {
        $Cloudflare->delete();
        
        return redirect()->route('Cloudflare.index')
                 ->with('success','User deleted successfully');
    }
}
