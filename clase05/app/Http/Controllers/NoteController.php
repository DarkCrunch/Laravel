<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NoteController extends Controller
{
    /*
    Create
    Read
    Update
    Delete
    */

    public function index(): View
    {
        $notes = Note::all();
        return view('index', compact('notes'));
    }

    public function create(): View
    {
        return view('create_form');
    }

    public function store(NoteRequest $request): RedirectResponse
    {
        /* $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save(); */
        /* Note::create([
            'title' => $request->title,
            'description' => $request->description
        ]); */

        //validaciones independientes
        /* $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required|max:255|min:3'
        ]); */
        //en este caso como los nombres de los input text corresponden de igual manera con los campos de la tabla se procede a usar:
        Note::create($request->all());
        return redirect()->route('note.index')->with('success', 'Note created');
    }
    public function edit(Note $note): View
    {
        return view('edit_form', compact('note'));
    }

    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated');
    }

    public function show(Note $note): View
    {
        return view('show_form', compact('note'));
    }

    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted');
    }
}
