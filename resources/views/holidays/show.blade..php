@extends('layouts.app')

@section('content')
    <h1>Detalles del Día Festivo</h1>
    
    <p>Nombre: {{ $holiday->name }}</p>
    <!-- Mostrar otros detalles del día festivo -->
    
    <a href="{{ route('holidays.edit', $holiday->id) }}">Editar</a>
    
    <form action="{{ route('holidays.destroy', $holiday->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection