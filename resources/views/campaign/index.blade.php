@extends('layouts.grafitex')
@section('ruta','Stores')
@section('title','Crea una campaña')

@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Campaña
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- tabla store -->
                    @include('campaign._campaignIndexList')
                </div>
            </div>
        </div>
    </div>
   
@endsection

@section('scriptsextra')
@endsection
