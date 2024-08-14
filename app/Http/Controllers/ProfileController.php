<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
  
        return view('profile');

    }

    public function update(Request $request) 
    {
      $userId = Auth::id();
      $data = $request->validate([    
      'name'=>['required', 'min:3'],
      'email'=>['required', 'email'],
      'pass' => ['nullable', 'confirmed', 'min:8'],
      'image' => ['mimes:jpeg,png,jpg|max:2048'], 
     ]); 
     if ($request->has('password'))
     {
        $data['password'] = Hash::make(request('password'));
     }
    //  $request->whenFilled('password', function($input) use (&$data) {
    //     $data['password'] = Hash::make($input);
    // });
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('users');
        $data['image'] = $path;
    }

    // Update the user's profile
    // auth()->user()->update($data);
    User::findOrFail($userId)->update($data);
    return redirect()->back()->with('success', 'Profile updated successfully.');
}
}