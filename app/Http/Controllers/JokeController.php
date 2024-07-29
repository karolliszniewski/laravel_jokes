<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class JokeController extends Controller
{

    public function index()
    {
        $jokes = Joke::all();
        return view('jokes.index', compact('jokes'));
    }


    public function edit($id)
    {
        $joke = Joke::findOrFail($id);
        return view('jokes.edit', compact('joke'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'joke' => 'required|string|max:255',
        ]);

        $joke = Joke::findOrFail($id);
        $joke->update([
            'joke' => $request->input('joke')
        ]);

        return redirect()->route('jokes.index')->with('success', 'Joke updated successfully.');
    }
}
