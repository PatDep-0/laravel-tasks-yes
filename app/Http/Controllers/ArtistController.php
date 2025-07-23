<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $artists = [];
        if ($query) {
            $artists = Artist::where('artistName', 'like', "%$query%")
                ->with(['albums', 'songs'])
                ->get();
        }
        return view('artists.search', compact('artists', 'query'));
    }

    public function show($artistID)
    {
        $artist = Artist::with(['albums', 'songs'])->findOrFail($artistID);
        return view('artists.show', compact('artist'));
    }
}
