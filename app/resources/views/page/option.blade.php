@extends('layouts.app')

@section('title', 'Realizar Votación')

@section('content')
<div class="container">
    <link href="{{ asset('css/page/option.css') }}" rel="stylesheet">

    <h1>Votación</h1>

    <div class="options-container">
        @foreach($options as $option)
        <div class="option-card">
            @if($option->image_url)
            <img src="{{ $option->image_url }}" alt="{{ $option->name }}">
            @endif
            <h2>{{ $option->name }}</h2>
            <p>{{ $option->description }}</p>
            <form id="voteForm{{ $option->id }}" action="{{ route('votes') }}" method="POST">
                @csrf
                <input type="hidden" name="option_id" value="{{ $option->id }}">
                <input type="hidden" name="user_id" value="1">
                <button type="submit" class="vote-button">
                    Votar
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>

<script>
    // Agregar un event listener para el submit del formulario
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault(); // Prevenir el comportamiento por defecto del submit

            const formId = e.target.id; // Obtener el ID del formulario
            const formData = new FormData(e.target); // Crear un objeto FormData con los datos del formulario

            try {
                const response = await fetch(e.target.action, {
                    method: 'POST',
                    body: formData,
                });

                if (!response.ok) {
                    throw new Error('Hubo un problema al enviar la solicitud.');
                }

                // Si la respuesta es exitosa, redireccionar a la página de éxito
                window.location.href = "{{ route('completed-vote') }}";
            } catch (error) {
                console.error(error);
                alert('Ocurrió un error. Por favor, inténtalo de nuevo.');
            }
        });
    });
</script>

@endsection
