<!-- resources/views/voting_completed.blade.php -->

@extends('layouts.app')

@section('title', 'Votación Completada')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold mb-4">¡Votación Completada!</h1>
        <p class="text-lg text-gray-700">Gracias por participar en nuestra votación.</p>
        <p class="text-lg text-gray-700">Tu voto ha sido registrado exitosamente.</p>
        <div class="mt-8">
            <a href="{{ route('elections') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Volver al Inicio</a>
        </div>
    </div>
</div>
@endsection
