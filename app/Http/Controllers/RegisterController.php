<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // public function register(Request $request){
    //     $validated_data = $request->validate([
    //         'pfp'=>'image',
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     if($request->file('pfp')){
    //         $validated_data['pfp'] = $request->file('pfp')->store('images',['disk'=>'public']);
    //         User::create([
    //             'pfp' => $validated_data['pfp'],
    //             'name' => $validated_data['name'],
    //             'email' => $validated_data['email'],
    //             'password' => Hash::make($validated_data['password']),
    //         ]);
    //     } else {
    //         User::create([
    //             'pfp' => "default.png",
    //             'name' => $validated_data['name'],
    //             'email' => $validated_data['email'],
    //             'password' => Hash::make($validated_data['password']),
    //         ]);
    //     }



    //     return redirect()->route('login');


    // }
}
