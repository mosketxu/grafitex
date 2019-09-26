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
                    @include('campaign._campaignCreateForm')
                </div>
            </div>
        </div>
    </div>
   
@endsection

@section('scriptsextra')
@endsection

@push('scriptchosen')
    {{-- <script src="{{asset('/js/createGeneroAjax.js')}}"></script> --}}
    <script>   
        $(document).ready(function(){
            let row_number = 1;
            $("#add_row").click(function(e){
            e.preventDefault();
            let new_row_number = row_number - 1;
            $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
            $('#products_table').append('');
            row_number++;
            });
        
            $("#delete_row").click(function(e){
            e.preventDefault();
            if(row_number > 1){
                $("#product" + (row_number - 1)).html('');
                row_number--;
            }
            });
        });
      </script>
@endpush
