<?php

namespace App\Http\Controllers;

use App\Models\forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


    public function destroy(Forum $f)
    {
        $f->delete();
        return redirect()->route('forum');
    }
}
