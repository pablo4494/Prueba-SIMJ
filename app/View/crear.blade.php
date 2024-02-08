@extends('layouts.app')

@section('content')
    <h1>Crear Usuario</h1>
    
    <form action="{{ route('users.guardar') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Crear Usuario</button>
    </form>
    <div>
    <label for="color">Color:</label>
    <input type="color" name="color" id="color" value="#ff0000"> <!-- Valor inicial opcional -->
</div>
@endsection
