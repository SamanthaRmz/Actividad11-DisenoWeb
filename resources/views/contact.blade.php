@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Contacto</h2>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <p>¿Deseas aprender más sobre los colores? Llena el siguiente formulario y te contactaremos!</p>
        <form action="{{ route('contact.submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
