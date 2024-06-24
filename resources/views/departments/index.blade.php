@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Lista de Departamentos</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('departments.create') }}" class="btn btn-primary mb-3">Adicionar Departamento</a>
                        <ul class="list-group">
                            @forelse($departments as $department)
                                <li class="list-group-item">{{ $department->name }}</li>
                            @empty
                                <li class="list-group-item">Nenhum departamento encontrado.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
