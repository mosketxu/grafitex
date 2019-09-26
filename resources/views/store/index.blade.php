@extends('layouts.grafitex')
@section('ruta','Stores')
@section('title','Listado de Stores')

@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Stores
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- tabla store -->
                    @include('store._storetable')
                </div>
            </div>
        </div>
    </div>
   
@endsection

@section('scriptsextra')
@endsection
