<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        //return response()->json(Note::all(), 200);
        return NoteResource::collection(Note::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request): JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json(['success' => true, 'data' => $note], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResource
    {
        $note = Note::find($id);
        return new NoteResource($note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, $id): JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();
        return response()->json(['success' => true, 'data' => new NoteResource($note)], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
        Note::find($id)->delete();
        return response()->json(['success' => true], 200);
    }
}
