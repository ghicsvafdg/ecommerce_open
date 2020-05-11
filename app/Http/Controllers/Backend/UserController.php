<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user= User::all();
        return view('backend.user', compact('user'));
    }
    
    public function detail($id){
        $user = User::findOrFail($id);
        return view('backend.user_detail', compact('user'));
    }
    
    public function edit($id){
        $user = User::findOrFail($id);
        return view('backend.user_edit', compact('user'));
    }
    
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name= $request->input('name');
        $user->username= $request->input('username');
        $user->emaiL= $request->input('email');
        $user->role= $request->input('role');
        $user->address= $request->input('address');
        $user->phone= $request->input('phone');
        $user->dob =$request->input('dob');
        $user->save();
        return redirect()->route('user');
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }

    public function create(){
        return view('backend.user_create');
    }

    public function store(){
        $rules = ([

            'username' => ['required', 'string','min:8', 'max:255','regex:/^[a-z0-9._-]{4,16}$/i', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'regex:/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/i'],
            'password' => ['required', 'string', 'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,12}$/', 'confirmed']
            ]);
            $this->validate($request,$rules);
            
            User::create([
                'username'=> $request->username,
                'email'=> $request->email,
                'password'=> bcrypt($request->password),
                'role'=> $request->role,
                ]);
                return redirect()->route('manage-user.create')->with('success','Thêm người dùng thành công');
    }
}
