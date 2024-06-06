<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request) {
        $user = User::where('id',Auth::user()->id)->first();

        return view('profile', compact('user'));
    }
}
