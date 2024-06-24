@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Lista de Administrações</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('administrations.create') }}" class="btn btn-primary mb-3">Adicionar Administração</a>
                        <ul class="list-group">
                            @forelse($administrations as $administration)
                                <li class="list-group-item">{{ $administration->name }}</li>
                            @empty
                                <li class="list-group-item">Nenhuma administração encontrada.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
