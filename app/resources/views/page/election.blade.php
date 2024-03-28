@extends('layouts.app')

@section('title', 'Listado de Elecciones')

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-semibold text-gray-900 mb-6">Listado de Elecciones</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($elections as $election)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="px-6 py-4">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $election->name }}</h2>
                        @php
                            $startDate = \Carbon\Carbon::parse($election->start_date)->format('F j, Y');
                            $endDate = \Carbon\Carbon::parse($election->end_date)->format('F j, Y');
                        @endphp
                        <p class="text-gray-600">{{ $startDate }} - {{ $endDate }}</p>
                        <p class="text-sm text-gray-600 mt-2">Estado:
                            <span class="inline-flex items-center justify-center px-2 py-1 rounded-full text-xs font-semibold
                                @if($election->status === 'Planned') bg-yellow-200 text-yellow-800
                                @elseif($election->status === 'Ongoing') bg-green-200 text-green-800
                                @else bg-blue-200 text-blue-800
                                @endif">
                                {{ $election->status }}
                            </span>
                        </p>
                        <p class="text-sm text-gray-600 mt-2">Institución: {{ $election->institution->name }}</p>
                        <div class="mt-3">
                            <a href="{{ route('options', $election->id) }}" class="inline-block px-6 py-2 bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">
                                Comenzar a Votar
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
