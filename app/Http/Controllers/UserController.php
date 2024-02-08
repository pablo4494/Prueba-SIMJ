<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    
    public function crear()
    {
        return view('users.create');
    }
    
    
    public function guardar(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
    
        $validatedData['password'] = bcrypt($request->password);
    
        User::create($validatedData);
    
        return redirect('/users')->with('success', 'User has been added');
    }
    
    public function editar($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    
    public function actualizar(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'sometimes|min:6',
        ]);
    
        if ($request->password) {
            $validatedData['password'] = bcrypt($request->password);
        } else {
            unset($validatedData['password']);
        }
    
        User::whereId($id)->update($validatedData);
    
        return redirect('/users')->with('success', 'User has been updated');
    }
    
    public function borrar($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return back()->with('success', 'User has been deleted');
    }
      
}