@extends('layouts.app')

@section('content')
    <h1>Editar Día Festivo</h1>
    
    <form action="{{ route('holidays.update', $holiday->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $holiday->name }}">
        </div>
        
        <!-- Otros campos como color, día, mes, año, y recurrente -->
        
        <button type="submit">Guardar Cambios</button>
    </form>
@endsection