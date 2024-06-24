@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Adicionar Departamento</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('departments.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome do Departamento:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome do departamento" required>
                            </div>
                            <button type="submit" class="btn btn-primary custom-btn-2">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
