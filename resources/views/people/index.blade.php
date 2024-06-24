@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">Lista de Presenças</h1>
        <a href="{{ route('people.create') }}" class="btn btn-primary mb-3 custom-btn">Adicionar Irmãos</a>

        <div class="border rounded p-3"> {{-- Adicionando um quadrado com borda arredondada --}}
            <ul class="list-group">
                @forelse ($people as $person)
                    <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <strong>{{ $person->name }}</strong> -
                            @if ($person->administration_id)
                                {{ $person->administration->name }}
                            @else
                                <span class="text-muted">Administração não especificada</span>
                            @endif
                            -
                            @if ($person->department_id)
                                {{ $person->department->name }}
                            @else
                                <span class="text-muted">Departamento não especificado</span>
                            @endif
                        </div>
                    </li>
                @empty
                    <li class="list-group-item">Nenhuma pessoa encontrada.</li>
                @endforelse
            </ul>

            <div class="mt-4 d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm">
                        {{ $people->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
                    </ul>
                </nav>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('people.report') }}" class="btn btn-secondary custom-btn">Imprimir Relatório</a>
        </div>
        <div class="mt-4">
            <div class="alert alert-danger">
                <p>Acesso apenas para o responsável pela portaria.</p>
            </div>
            <a href="{{ route('administrations.create') }}" class="btn btn-secondary mb-3 custom-btn">Criar Administração</a>
            <a href="{{ route('departments.create') }}" class="btn btn-info mb-3 custom-btn">Criar Departamento</a>
        </div>

    </div>
@endsection
