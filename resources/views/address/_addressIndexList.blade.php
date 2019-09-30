<div class="card mb-3">
    <div class="card-header text-primary">
        <div class="row">
                <div class="col-auto ">
                    <i class="fas fa-fw fa-address-card"></i>
                    Direcciones
                </div>
                <div class="col-auto mr-auto">
                    {{-- <a  href="{{route('address.create') }}" role="button"><i class="fas fa-plus-circle fa-lg text-primary"></i></a> --}}
                    <a  href="" role="button" data-toggle="modal" data-target="#addressCreateModal"><i class="fas fa-plus-circle fa-lg text-primary"></i></a>
                </div>

                <div class="col-auto">
                    <form method="GET" action="{{route('address.index') }}">
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
            <table id="tabla_addresss" class="table table-hover table-sm small" cellspacing="0" width=100%>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Store</th>
                        <th>Totstore</th>
                        <th>Country Code</th>
                        <th>Channel</th>
                        <th>Store Name</th>
                        <th>Direccion</th>
                        <th>Nº</th>
                        <th>City</th>
                        <th>Provincia</th>
                        <th>Cod.Postal</th>
                        <th>Phone</th>
                        <th>@email</th>
                        <th>Store Concept</th>
                        {{-- <th>Creada el:</th>
                        <th>Modificada el:</th> --}}
                        <th class="text-right">Op. &nbsp; &nbsp; </th>
                    </tr>
                </thead>
                <tbody class="text-muted buscar">
                @foreach ($addresses as $address)
                    <tr data-entry-id="{{ $address->id }}">
                        <td>{{$address->id ?? '' }}</td>
                        <td>{{$address->store_id ?? '' }}</td>
                        <td>{{$address->address_totstore ?? '' }}</td>
                        <td>{{$address->address_countrycode ?? '' }}</td>
                        <td>{{$address->address_channel ?? '' }}</td>
                        <td>{{$address->address_storename ?? '' }}</td>
                        <td>{{$address->address_address ?? '' }}</td>
                        <td>{{$address->address_number ?? '' }}</td>
                        <td>{{$address->address_city ?? '' }}</td>
                        <td>{{$address->address_province ?? '' }}</td>
                        <td>{{$address->address_postalcode ?? '' }}</td>
                        <td>{{$address->address_phone ?? '' }}</td>
                        <td>{{$address->address_email ?? '' }}</td>
                        <td>{{$address->address_storeconcept ?? '' }}</td>
                        {{-- <td>{{$address->created_at ?? '' }}</td>
                        <td>{{$address->updated_at ?? '' }}</td>  --}}

                        <td class="text-right">
                            &nbsp; &nbsp;
                            <a href="{{route('address.show',$address->id) }}" title="Show"><i class="far fa-eye text-success"></i></a>
                            <a href="{{route('address.edit',$address->id) }}"  title="Edit"><i class="far fa-edit text-primary"></i></a>
                            <a href="{{route('address.destroy',$address->id)}}" title="Delete"><i class="far fa-trash-alt text-danger"></i></a>
                        <td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-sm">
                {{ $addresses->links() }}
            </div>
        </div>
    </div>
</div>