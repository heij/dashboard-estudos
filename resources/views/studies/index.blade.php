@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de estudos
        <a href="{{ route('studies.create') }}">
            <button class="btn btn-primary">Cadastrar</button>
        </a>
    </h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Área</th>
                <th>Data Inicial</th>
                <th>Data Final</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($studies as $study)
            <tr>
                <td>{{ $study->id }}</td>
                <td>{{ $study->description }}</td>
                <td>{{ $study->area_id }}</td>
                <td>{{ $study->date_init }}</td>
                <td>{{ $study->date_finish }}</td>
                <td>{{ $study->status }}</td>
                <td>
                    <a href="{{ route('studies.edit', ['study' => $study->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{ route('studies.destroy', ['study' => $study]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $studies->links() }}
</div>
@endsection