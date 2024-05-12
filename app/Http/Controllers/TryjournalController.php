<?php

namespace App\Http\Controllers;

use App\Models\tryjournal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TryjournalController extends Controller
{
    public function index()
    {
        $trymejournals = tryjournal::all();
        return view('tryme.trymejournal', compact('trymejournals'));
    }

    public function show(Tryjournal $tryjournal)
    {
        return view('tryme.journaldetail', compact('tryjournal'));
    }

    public function addjournalpage()
    {
        $trymejournals = tryjournal::all();
        return view('tryme.trymejournal', compact('trymejournals'));
    }

    public function addjournal(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);

        // Create tryjournals
        tryjournal::create([
            'title' => $request->title,
            'content' => $request->content,
            'date' => $request->date
        ]);

        // Redirect
        return redirect()->route('trymejournal');
    }

    public function editjournal(Tryjournal $tryjournal)
    {
        return view('tryme.editjournal', compact('tryjournal'));
    }

    public function updatejournal(Request $request, Tryjournal $tryjournal)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);

        $tryjournal->update([
            'title' => $request->title,
            'content' => $request->content,
            'date' => $request->date
        ]);

        return redirect()->route('trymejournal');
    }

    public function destroy(Tryjournal $tj)
    {
        $tj->delete();
        return redirect()->route('trymejournal');
    }
}
