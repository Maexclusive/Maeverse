<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vm;
use App\Models\TunelProvider;
use DB;
Use Alert;

class VmController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vm = Vm::latest()->paginate(5);
        return view('pages/vm',compact('vm'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('vm.index',compact('vm'));
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
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('vm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($vm)
    {
        $data = DB::table('vm')->where('vm_id',$vm)->get();
        return response()->json($data);
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
    public function destroy(Vm $vm)
    {
        $vm->delete();
        return redirect()->route('vm.index')
                 ->with('success','User deleted successfully');
    }
}
