<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return view('notes.index');
    }
    public function store(Request $request)
    {
        $noteContent = $request->input('add');
        // save the note to session
        $notes = session('notes', []);
        $notes[] = $noteContent;
        session(['notes' => $notes]);
        return back()->with('success', 'Note added: ' . $noteContent);
    }
}
