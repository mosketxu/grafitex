@extends('layouts.grafitex')
@section('ruta','Stores')
@section('title','Grafitex-Stores')

@section('content')
    <div id="content-app">
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
                    @include('store._storeIndexList')
                    @include('store._storeCreateModal')
                </div>
            </div>
        </div>
    </div>
   
@endsection

@section('scriptsextra')
@endsection
