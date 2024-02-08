@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users</h1>
    <a href="{{ route('users.crear') }}" class="btn btn-primary">Add User</a>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
</div>
@endsection

@section('content')
    <h1>Lista de Días Festivos</h1>
    
    <a href="{{ route('holidays.create') }}" class="btn btn-primary">Crear Día Festivo</a>
    
    <ul>
        @foreach ($holidays as $holiday)
            <li>{{ $holiday->name }}</li>
            <!-- Mostrar más detalles del día festivo y enlaces para editar y eliminar -->
        @endforeach
    </ul>
@endsection