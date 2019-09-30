<div class="card mb-3">
    <div class="card-header text-primary">
        <div class="row">
                <div class="col-auto ">
                    <i class="fas fa-fw fa-address-card"></i>
                    Campañas
                </div>
                <div class="col-auto mr-auto">
                    {{-- <a  href="{{route('campaign.create') }}" role="button"><i class="fas fa-plus-circle fa-lg text-primary"></i></a> --}}
                    <a  href="" role="button" data-toggle="modal" data-target="#campaignCreateModal"><i class="fas fa-plus-circle fa-lg text-primary"></i></a>
                </div>

                <div class="col-auto">
                    <form method="GET" action="{{route('campaign.index') }}">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search fa-sm text-primary"></i></span>
                            </div>
                            {{-- <input id="busca" name="busca"  type="text" class="form-control" name="search" value='{{$busqueda}}' placeholder="Search for..."/> --}}
                            <input id="busca" name="busca"  type="text" class="form-control" name="search" value='' placeholder="Search for..."/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla_campaigns" class="table table-hover table-sm small" cellspacing="0" width=100%>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Campaña</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin Prevista</th>
                        <th>Creada el:</th>
                        <th>Modificada el:</th>
                        <th class="text-right">Est. &nbsp; &nbsp;  &nbsp; Op. &nbsp; &nbsp; </th>
                    </tr>
                </thead>
                <tbody class="text-muted buscar">
                @foreach ($campaigns as $campaign)
                    <tr data-entry-id="{{ $campaign->id }}">
                        <td>{{$campaign->id ?? '' }}</td>
                        <td>{{$campaign->campaign_name ?? '' }}</td>
                        <td>{{$campaign->campaign_initdate ?? '' }}</td>
                        <td>{{$campaign->campaign_enddate ?? '' }}</td>
                        <td>{{$campaign->created_at ?? '' }}</td>
                        <td>{{$campaign->updated_at ?? '' }}</td> 

                        <td class="text-right">
                            @if($campaign->campaign_state===0)
                                <i class="fas fa-circle text-primary fa-xs"></i>
                            @elseif($campaign->campaign_state===1)
                                <i class="fas fa-circle text-warning fa-xs"></i>
                            @else
                                <i class="fas fa-circle text-success fa-xs"></i>
                            @endif
                            &nbsp; &nbsp;
                            <a href="{{route('campaign.show',$campaign->id) }}" title="Show"><i class="far fa-eye text-success"></i></a>
                            <a href="{{route('campaign.edit',$campaign->id) }}"  title="Edit"><i class="far fa-edit text-primary"></i></a>
                            <a href="{{route('campaign.destroy',$campaign->id)}}" title="Delete"><i class="far fa-trash-alt text-danger"></i></a>
                        <td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-sm">
                {{ $campaigns->links() }}
            </div>
        </div>
    </div>
</div>