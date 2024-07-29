<?php

// app/Http/Controllers/JokeController.php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;

class JokeController extends Controller
{

    public function __construct()
    {
        // Allow unauthenticated users to view the list of jokes, but require authentication for all other actions
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $jokes = Joke::paginate(10);
        return view('jokes.index', compact('jokes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'joke' => 'required|string|max:255',
        ]);

        Joke::create([
            'joke' => $request->input('joke'),
        ]);

        return redirect()->route('jokes.index')->with('success', 'Joke added successfully!');
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

    public function destroy($id)
    {
        $joke = Joke::findOrFail($id);
        $joke->delete();

        return redirect()->route('jokes.index')->with('success', 'Joke deleted successfully.');
    }
}
