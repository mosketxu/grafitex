<div class="card mb-3">
    <div class="card-header text-primary">
        <div class="row">
            <div class="col-auto ">
                <i class="fas fa-fw fa-address-card"></i>
                Editar Campaña
            </div>
            <div class="col-auto">
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="form-group col">
                            <label for="campaign_name">Campaña</label>
                            <input type="text" class="form-control form-control-sm" id="campaign_name" name="campaign_name" value="{{ old('campaign_name',$campaignEdit->campaign_name) }}" disabled/>
                        </div>
                        <div class="form-group col">
                            <label for="campaign_initdate">Fecha Inicio</label>
                            <input type="date" class="form-control form-control-sm" id="campaign_initdate" name="campaign_initdate" value="{{ old('campaign_initdate',$campaignEdit->campaign_initdate) }}" disabled/>
                        </div>
                        <div class="form-group col">
                            <label for="campaign_enddate">Fecha Finalización</label>
                            <input type="date" class="form-control form-control-sm" id="campaign_enddate" name="campaign_enddate" value="{{ old('campaign_enddate',$campaignEdit->campaign_enddate) }}" disabled/>
                        </div>
                    </div>    
                    <div class="card">
                        <div class="card-header">
                            Stores
                            <span id="campaignid" class="d-none">{{ $campaignEdit->id }}</span>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                {{-- Store Asociados --}}
                                <div class="col-sm-6">
                                    <h6>Asociadas</h6>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-sm small" id="tablaAsociadas" cellspacing="0" width=100%>
                                            <thead>
                                                <tr>
                                                    <th>Store</th>
                                                    <th>Store Name</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tStoAsoc"class="text-muted buscar">
                                                <form method="POST" action="">
                                                    <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                                                </form>    
                                            </tbody>
                                        </table>
                                        <div class="pagination-sm">
                                        {{-- {{ $stores->links() }} --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- Stores Disponibles --}}
                                <div class="col-sm-6">
                                    <h6>Disponibles</h6>
                                        <div class="table-responsive">
                                        <table class="table table-hover table-sm small" id="tablaDisponibles"cellspacing="0" width=100%>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Store</th>
                                                    <th>Store name</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tStoDisp" class="text-muted buscar">
                                                <form method="POST" action="">
                                                    <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token2">
                                                </form>
                                            </tbody>
                                        </table>
                                        <div class="pagination-sm">
                                        {{-- {{ $stores->links() }} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('campaign.index')}}">Regresar a campañas</a>
        </div>
    </div>
</div>

@push('scriptchosen')
    <script src="{{asset('/js/campaignStore.js')}}"></script>
@endpush