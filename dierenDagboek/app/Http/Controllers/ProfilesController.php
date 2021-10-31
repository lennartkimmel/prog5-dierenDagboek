<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {       
        $users = User::all();
        return view('profiles.index')->with('users', $users);
    }

    public function show($id) {
        $user = User::findOrFail($id);

        if(auth()->user()->id !==$user->id) {
            return redirect('/denied');
        }

        return view('profiles.show', compact('user', 'id'));
    }

    public function edit($id) {
        $user = User::find($id);
        if(auth()->user()->id !==$user->id) {
            return redirect('/denied');
        }

        return view('profiles.edit', compact('user', 'id'));
    }

    public function update($id) {
        $user = User::find($id);
        if(auth()->user()->id !==$user->id) {
            return redirect('/denied');
        }
        
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required'
        ]);
        
        auth()->user()->update($data);
        return redirect("profiles/{$user->id}");
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->destroy($id);
        return redirect()->route('profiles.index')->with('success', 'Data deleted!');
    }
}
