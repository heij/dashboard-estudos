@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row text-center d-flex justify-content-around text-white">
                        <div class="card col-md-3 bg-danger">
                            <div class="card-body">
                                <h5 class="card-title">Estudos Atrasados</h5>
                                <p class="card-text">{{ $studies['Atrasado'] ?? 0 }}</p>
                            </div>
                        </div>
                        <div class="card col-md-3 bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Estudos em Andamento</h5>
                                <p class="card-text">{{ $studies['Em andamento'] ?? 0 }}</p>
                            </div>
                        </div>
                        <div class="card col-md-3 bg-success">
                            <div class="card-body">
                                <h5 class="card-title">Estudos Concluídos</h5>
                                <p class="card-text">{{ $studies['Finalizado'] ?? 0 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection