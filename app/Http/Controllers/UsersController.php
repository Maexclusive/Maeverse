<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Alert;
class UsersController extends Controller
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
        $users = user::orderBy('name', 'asc')->paginate(10);
        return view('control_panel/users',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('users.index');
    }

    public function show(User $user)
    {
        return redirect()->route('users.index',compact('user'));
    } 
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        User::create($request->all());
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('users.index');
    }
     
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('users.index',compact('user'));
    }
}
