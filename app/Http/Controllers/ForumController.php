<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index(Request $request)
    {
        $sort = 'date_created';
        $direction = $request->query('direction', 'desc');

        $query = Forum::orderBy($sort, $direction);

        $forums = $query->paginate(10);

        return view('tryme.forum', compact('forums'));
    }

    public function show(Forum $forum){
        return view('tryme.forumdetail', compact('forum'));
    }


    public function addforumpage()
    {
        return view('tryme.createforum');
    }


    public function store(Request $request)
    {
        // columns of created_at	updated_at	title	username	pfp	content	date_created	date_modified	mood	tags	attachments	deleted	version

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date_created' => 'nullable|date_format:Y-m-d\TH:i',
            'date_modified' => 'nullable|date_format:Y-m-d\TH:i',
            'mood' => 'nullable|string',
            'tags' => 'nullable|string',
            'attachments' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,zip|max:2048',
        ]);

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to be logged in to create a journal.');
        }

        $user = Auth::user();
        $attachmentPath = null;

        if ($request->hasFile('attachments')) {
            $attachmentPath = $request->file('attachments')->store('attachments', 'public');
        }

        Forum::create([
            'title' => $request->title,
            'content' => $request->content,
            'username' => $user->name,
            'pfp' => $user->pfp,
            'date_created' => $request->date_created ?? now(),
            'date_modified' => $request->date_modified ?? now(),
            'mood' => $request->mood,
            'tags' => $request->tags,
            'attachments' => $attachmentPath,
            'deleted' => 0,
            'version' => 1,
        ]);

        return redirect()->route('forum')->with('success', 'Journal created successfully.');
    }




    public function destroy(Forum $f)
    {
        $f->delete();
        return redirect()->route('forum');
    }
}
