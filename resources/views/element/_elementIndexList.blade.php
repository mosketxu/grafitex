<div class="card mb-3">
    <div class="card-header text-primary">
        <div class="row">
                <div class="col-auto ">
                    <i class="fas fa-fw fa-address-card"></i>
                    Campañas
                </div>
                <div class="col-auto mr-auto">
                    {{-- <a  href="{{route('element.create') }}" role="button"><i class="fas fa-plus-circle fa-lg text-primary"></i></a> --}}
                    <a  href="" role="button" data-toggle="modal" data-target="#elementCreateModal"><i class="fas fa-plus-circle fa-lg text-primary"></i></a>
                </div>

                <div class="col-auto">
                    <form method="GET" action="{{route('element.index') }}">
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
            <table id="tabla_elements" class="table table-hover table-sm small" cellspacing="0" width=100%>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ubicación</th>
                        <th>Mobiliario</th>
                        <th>Propiedad</th>
                        <th>Carteleria</th>
                        <th>Medida</th>
                        <th>Material</th>
                        <th>Unit x Prop</th>
                        <th>Precio</th>
                        <th>Creado el</th>
                        <th>Modificado el</th>
                        <th class="text-right">Op. &nbsp; &nbsp; &nbsp; </th>
                    </tr>
                </thead>
                <tbody class="text-muted buscar">
                @foreach ($elements as $element)
                    <tr data-entry-id="{{ $element->id }}">
                        <td>{{$element->id ?? '' }}</td>
                        <td>{{$element->element_ubicacion ?? '' }}</td>
                        <td>{{$element->element_mobiliario ?? '' }}</td>
                        <td>{{$element->element_propiedad ?? '' }}</td>
                        <td>{{$element->element_carteleria ?? '' }}</td>
                        <td>{{$element->element_medida ?? '' }}</td>
                        <td>{{$element->element_material ?? '' }}</td>
                        <td>{{$element->element_unit_x_prop ?? '' }}</td>
                        <td>{{$element->element_price ?? '' }}</td>
                        <td>{{$element->created_at ?? '' }}</td>
                        <td>{{$element->updated_at ?? '' }}</td> 

                        <td class="text-right">
                            &nbsp;&nbsp; &nbsp;
                            <a href="{{route('element.show',$element->id) }}" title="Show"><i class="far fa-eye text-success"></i></a>
                            <a href="{{route('element.edit',$element->id) }}"  title="Edit"><i class="far fa-edit text-primary"></i></a>
                            <a href="{{route('element.destroy',$element->id)}}" title="Delete"><i class="far fa-trash-alt text-danger"></i></a>
                        <td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-sm">
                {{ $elements->links() }}
            </div>
        </div>
    </div>
</div>