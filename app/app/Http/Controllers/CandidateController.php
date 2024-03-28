<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return response()->json(['candidates' => $candidates], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'political_party' => 'nullable|string|max:255',
            'option_id' => 'required|exists:options,id',
            'photo_url' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'experience' => 'nullable|string',
        ]);

        $candidate = Candidate::create($request->all());

        return response()->json(['candidate' => $candidate], 201);
    }

    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);
        return response()->json(['candidate' => $candidate], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'political_party' => 'nullable|string|max:255',
            'option_id' => 'required|exists:options,id',
            'photo_url' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'experience' => 'nullable|string',
        ]);

        $candidate = Candidate::findOrFail($id);
        $candidate->update($request->all());

        return response()->json(['message' => 'Candidato actualizado exitosamente'], 200);
    }

    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete();

        return response()->json(['message' => 'Candidato eliminado exitosamente'], 200);
    }
}
