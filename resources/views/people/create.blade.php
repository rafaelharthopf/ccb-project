@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Presença de Irmãos</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('people.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="administration">Administração:</label>
                <select class="form-control" name="administration" id="administration" required>
                    @foreach($administrations as $administration)
                        <option value="{{ $administration->id }}">{{ $administration->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="department">Departamento:</label>
                <select class="form-control" name="department" id="department" required>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
