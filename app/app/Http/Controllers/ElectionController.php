<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Election;

class ElectionController extends Controller
{
    public function index()
    {
        $elections = Election::all();
        return response()->json(['elections' => $elections], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'institution_id' => 'required|exists:institutions,id',
            'description' => 'nullable|string',
            'status' => 'nullable|in:Planned,Ongoing,Finished',
        ]);

        $election = Election::create($request->all());

        return response()->json(['election' => $election], 201);
    }

    public function show($id)
    {
        $election = Election::findOrFail($id);
        return response()->json(['election' => $election], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'institution_id' => 'required|exists:institutions,id',
            'description' => 'nullable|string',
            'status' => 'nullable|in:Planned,Ongoing,Finished',
        ]);

        $election = Election::findOrFail($id);
        $election->update($request->all());

        return response()->json(['message' => 'Elección actualizada exitosamente'], 200);
    }

    public function destroy($id)
    {
        $election = Election::findOrFail($id);
        $election->delete();

        return response()->json(['message' => 'Elección eliminada exitosamente'], 200);
    }
}
