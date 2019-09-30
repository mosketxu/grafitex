@extends('layouts.grafitex')
@section('ruta','Editar campaña')
@section('title','Grafitex-Editar campañas')

@section('content')
    <div id="content-app">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Campañas
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- tabla store -->
                    @include('campaign._campaignEdit')
                </div>
            </div>
        </div>
    </div>
   
@endsection

@section('scriptsextra')
@endsection