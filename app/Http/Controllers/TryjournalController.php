<?php

namespace App\Http\Controllers;

use App\Models\tryjournal;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TryjournalController extends Controller
{
    public function index(Request $request)
    {
        $sortOptions = ['date_created', 'mood', 'title'];
        $sort = in_array($request->query('sort'), $sortOptions) ? $request->query('sort') : 'date_created';
        $direction = $request->query('direction', 'desc');

        $user = User::where('id',Auth::user()->id)->first();
        $trymejournals = $user->tryjournals()->orderBy($sort, $direction)->paginate(10);

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
            'date_created' => 'nullable|date_format:Y-m-d\TH:i',
            'user_id' => '',
            'mood' => 'nullable|string',
            'tags' => 'nullable|string',
            'location' => 'nullable|string',
        ]);

        $user_id = -1;

        if (Auth::check()) {
            $user_id = Auth::user()->id;
        } else {
            return redirect()->route('login')->with('error', 'You need to be logged in to create a journal.');
        }

        // Create tryjournals
        Tryjournal::create([
            'title' => $request->title,
            'content' => $request->content,
            'date_created' => $request->date_created ?? now(),
            'user_id' => $user_id,
            'mood' => $request->mood,
            'tags' => $request->tags,
            'location' => $request->location,
            'font_color' => $request->font_color ?? '#000000',
            'font_format' => $request->font_format,
            'font_family' => $request->font_family,
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
            'font_color' => $request->font_color ?? '#000000',
            'font_format' => $request->font_format,
            'font_family' => $request->font_family,
        ]);

        return redirect()->route('trymejournal');
    }


    public function destroy(Tryjournal $tj)
    {
        $tj->delete();
        return redirect()->route('trymejournal');
    }
}
