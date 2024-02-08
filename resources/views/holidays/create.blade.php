@extends('layouts.app')

@section('content')
    <h1>Crear Día Festivo</h1>
    
    <form action="{{ route('holidays.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>
        
        <!-- Otros campos como color, día, mes, año, y recurrente -->
        
        <button type="submit">Crear Día Festivo</button>
    </form>
@endsection