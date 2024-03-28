<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    public function index()
    {
        $votes = Vote::all();
        return response()->json(['votes' => $votes], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:User,id',
            'option_id' => 'required|exists:Option,id',
        ]);

        $vote = Vote::create($request->all());

        return response()->json(['vote' => $vote], 201);
    }

    public function show($id)
    {
        $vote = Vote::findOrFail($id);
        return response()->json(['vote' => $vote], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:User,id',
            'option_id' => 'required|exists:Option,id',
        ]);

        $vote = Vote::findOrFail($id);
        $vote->update($request->all());

        return response()->json(['message' => 'Voto actualizado exitosamente'], 200);
    }

    public function destroy($id)
    {
        $vote = Vote::findOrFail($id);
        $vote->delete();

        return response()->json(['message' => 'Voto eliminado exitosamente'], 200);
    }
}
