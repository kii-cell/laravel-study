<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 


class HelloController extends Controller
{
    public function index()
    {
        return view('form');

    }

   
    public function submit(Request $request)
    {
        $request->validate([
            'username' => 'required|max:20',
            'age' => 'required|integer|min:18|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        ]);
        $user = new User();
        $user->name = $request->input('username');
        $user->age = $request->input('age');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $name = $request->input('username');
        $age = $request->input('age');
        return view('greeting', ['name' => $name, 'age'=> $age]);
  
    }
    public function list(){
        $users = User::all();
        return view('users',['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit',['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'username' => 'required|max:20',
            'age' => 'required|integer|min:18|max:100',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:4',
            
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('username');
        $user->age = $request->input('age');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
    
        $user->save();
        return redirect('/users')->with('message', 'ユーザー情報を更新しました。');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users');
    }
}