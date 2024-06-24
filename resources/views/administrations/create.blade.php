@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Adicionar Administração</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('administrations.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome da Administração:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome da administração" required>
                            </div>
                            <button type="submit" class="btn btn-primary  custom-btn-2">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
