<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;

class InstitutionController extends Controller
{
    public function index()
    {
        $institutions = Institution::all();
        return response()->json(['institutions' => $institutions], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
        ]);

        $institution = Institution::create($request->all());

        return response()->json(['institution' => $institution], 201);
    }

    public function show($id)
    {
        $institution = Institution::findOrFail($id);
        return response()->json(['institution' => $institution], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
        ]);

        $institution = Institution::findOrFail($id);
        $institution->update($request->all());

        return response()->json(['message' => 'Institución actualizada exitosamente'], 200);
    }

    public function destroy($id)
    {
        $institution = Institution::findOrFail($id);
        $institution->delete();

        return response()->json(['message' => 'Institución eliminada exitosamente'], 200);
    }
}
