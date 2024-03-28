<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::all();
        return response()->json(['options' => $options], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'election_id' => 'required|exists:elections,id',
            'vote_count' => 'nullable|integer',
        ]);

        $option = Option::create($request->all());

        return response()->json(['option' => $option], 201);
    }

    public function show($id)
    {
        $option = Option::findOrFail($id);
        return response()->json(['option' => $option], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'election_id' => 'required|exists:elections,id',
            'vote_count' => 'nullable|integer',
        ]);

        $option = Option::findOrFail($id);
        $option->update($request->all());

        return response()->json(['message' => 'Opción actualizada exitosamente'], 200);
    }

    public function destroy($id)
    {
        $option = Option::findOrFail($id);
        $option->delete();

        return response()->json(['message' => 'Opción eliminada exitosamente'], 200);
    }
}
