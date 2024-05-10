<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index(Request $request)
    {
        return view('tryme.trymejournal');
    }
}
