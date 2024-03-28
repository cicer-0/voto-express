<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json(['users' => $users], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dni' => 'required|string|max:20|unique:users',
            'email' => 'nullable|email|max:255|unique:users',
            'institution_id' => 'required|exists:institutions,id',
            'type' => 'required|in:Administrator,Regular User',
        ]);

        $user = User::create($request->all());

        return response()->json(['user' => $user], 201);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json(['user' => $user], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dni' => 'required|string|max:20|unique:users,dni,'.$id,
            'email' => 'nullable|email|max:255|unique:users,email,'.$id,
            'institution_id' => 'required|exists:institutions,id',
            'type' => 'required|in:Administrator,Regular User',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json(['message' => 'Usuario actualizado exitosamente'], 200);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Usuario eliminado exitosamente'], 200);
    }
}
