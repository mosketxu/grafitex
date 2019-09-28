<div class="card mb-3">
    <div class="card-header text-primary">
        <div class="row">
                <div class="col-auto ">
                    <i class="fas fa-fw fa-address-card"></i>
                    Stores
                </div>
                <div class="col-auto mr-auto">
                    <a  href="" role="button" data-toggle="modal" data-target="#storeCreateModal"><i class="fas fa-plus-circle fa-lg text-primary"></i></a>
                </div>

                <div class="col-auto">
                    <form method="GET" action="{{route('store.index') }}">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search fa-sm text-primary"></i></span>
                            </div>
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
            <table id="tabla_stores" class="table table-hover table-sm small" cellspacing="0" width=100%>
                <thead>
                    <tr>
                        <th>Store</th>Stores
                        <th>Name</th>Stores
                        <th>Country</th>
                        <th>Area</th>
                        <th>Segmento</th>
                        <th>Concepto</th>
                        <th>Creada el:</th>
                        <th>Modificada el:</th>
                        <th class="text-right">Op. &nbsp; &nbsp; </th>
                    </tr>
                </thead>
                <tbody class="text-muted buscar">
                @foreach ($stores as $store)
                    <tr data-entry-id="{{ $store->id }}">
                        <td>{{$store->id ?? '' }}</td>
                        <td>{{$store->store_name ?? '' }}</td>
                        <td>{{$store->store_country ?? '' }}</td>
                        <td>{{$store->store_area ?? '' }}</td>
                        <td>{{$store->store_segment ?? '' }}</td>
                        <td>{{$store->store_concept ?? '' }}</td>
                        <td>{{$store->created_at ?? '' }}</td>
                        <td>{{$store->updated_at ?? '' }}</td> 

                        <td class="text-right">
                            &nbsp; &nbsp; &nbsp;
                            <a href="{{route('store.show',$store->id) }}" title="Show"><i class="far fa-eye text-success"></i></a>
                            <a href="{{route('store.edit',$store->id) }}"  title="Edit"><i class="far fa-edit text-primary"></i></a>
                            <a href="{{route('store.destroy',$store->id)}}" title="Delete"><i class="far fa-trash-alt text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-sm">
                {{ $stores->links() }}
            </div>
        </div>
    </div>
</div>