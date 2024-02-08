@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    
    <form action="{{ route('users.editar', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Guardar Cambios</button>
    </form>
    <div>
    <label for="color">Color:</label>
    <input type="color" name="color" id="color" value="#ff0000"> <!-- Valor inicial opcional -->
</div>
@endsection