@extends('layouts.grafitex')
@section('ruta','Elementos')
@section('title','Grafitex-Elementos')

@section('content')
    <div id="content-app">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Elementos
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- tabla store -->

                    @include('element._elementIndexList')
                    @include('element._elementCreateModal')
                </div>
            </div>
        </div>
    </div>
   
@endsection

@section('scriptsextra')
@endsection
