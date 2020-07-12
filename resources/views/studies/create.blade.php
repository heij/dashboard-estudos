@extends('layouts.app')

@section('content')
<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Cadastro de Estudos</h1>

    <form class="mt-3" action="{{ route('studies.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6">
                <label class="control-label">Descrição</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                <label class="control-label">Área</label>
                <select name="area_id" class="form-control">
                    <option value="1">Frontend</option>
                    <option value="2">Backend</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                <label class="control-label">Data inicial</label>
                <input type="date" name="date_init" class="form-control">
            </div>

            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                <label class="control-label">Data final</label>
                <input type="date" name="date_finish" class="form-control">
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-md-6 col-sm-6 col-lg-6 col-6">
                <label class="control-label">Situação</label>
                <select name="status" class="form-control">
                    <option value="Finalizado">Finalizado</option>
                    <option value="Em atraso">Em atraso</option>
                    <option value="Em andamento" selected>Em andamento</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-block">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection