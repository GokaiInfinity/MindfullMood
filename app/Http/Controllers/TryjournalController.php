<?php

namespace App\Http\Controllers;

use App\Models\tryjournal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TryjournalController extends Controller
{
    public function index(Request $request)
    {
        $sortOptions = ['date_created', 'mood', 'title'];
        $sort = in_array($request->query('sort'), $sortOptions) ? $request->query('sort') : 'date_created';
        $direction = $request->query('direction', 'desc');

        $query = Tryjournal::orderBy($sort, $direction);

        $trymejournals = $query->paginate(10);

        return view('tryme.trymejournal', compact('trymejournals'));
    }

    public function show(Tryjournal $tryjournal)
    {
        return view('tryme.journaldetail', compact('tryjournal'));
    }

    public function addjournalpage()
    {
        return view('tryme.createjournal');
    }

    public function addjournal(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date_created' => 'required|date_format:Y-m-d\TH:i',
            'mood' => 'nullable|string',
            'tags' => 'nullable|string',
            'location' => 'nullable|string',
        ]);

        // Create tryjournals
        tryjournal::create([
            'title' => $request->title,
            'content' => $request->content,
            'date_created' => $request->date_created,
            'mood' => $request->mood,
            'tags' => $request->tags,
            'location' => $request->location,
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
            'date_created' => 'required|date_format:Y-m-d\TH:i',
            'mood' => 'nullable|string',
            'tags' => 'nullable|string',
            'location' => 'nullable|string',
        ]);

        $tryjournal->update([
            'title' => $request->title,
            'content' => $request->content,
            'date_created' => $request->date_created,
            'mood' => $request->mood,
            'tags' => $request->tags,
            'location' => $request->location,
        ]);

        return redirect()->route('trymejournal');
    }


    public function destroy(Tryjournal $tj)
    {
        $tj->delete();
        return redirect()->route('trymejournal');
    }
}
