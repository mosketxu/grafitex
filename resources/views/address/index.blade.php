@extends('layouts.grafitex')
@section('ruta','Direcciones')
@section('title','Grafitex-Direcciones')

@section('content')
    <div id="content-app">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Direcciones
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- tabla store -->
                    @include('address._addressIndexList')
                    @include('address._addressCreateModal')
                </div>
            </div>
        </div>
    </div>
   
@endsection

@section('scriptsextra')
@endsection
