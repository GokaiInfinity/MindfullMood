<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrymeController extends Controller
{
    function index(){
        return view('tryme.menu');
    }
}
