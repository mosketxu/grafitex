<!-- Modal -->
<div class="modal fade" id="storeCreateModal" tabindex="-1" role="dialog" aria-labelledby="indexCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="storeCreateModalLabel">Nueva Store</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- @include('partials._errores') --}}
                <form method="post" action="{{ route('store.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label for="store_id">Store</label>
                            <input type="text" class="form-control form-control-sm" id="store_id" name="id" value="{{ old('id') }}" />
                        </div>
                        <div class="form-group col">
                            <label for="store_name">Store Name</label>
                            <input type="text" class="form-control form-control-sm" id="store_name" name="store_name" value="{{ old('store_name') }}" />
                        </div>
                        <div class="form-group col">
                            <label for="store_country">Store Country</label>
                            <input type="text" class="form-control form-control-sm" id="store_name" name="store_country" value="{{ old('store_country') }}" />
                        </div>
                        <div class="form-group col">
                            <label for="store_area">Store area</label>
                            <input type="text" class="form-control form-control-sm" id="store_area" name="store_area" value="{{ old('store_area') }}" />
                        </div>
                        <div class="form-group col">
                            <label for="store_segment">Store segment</label>
                            <input type="text" class="form-control form-control-sm" id="store_segment" name="store_segment" value="{{ old('store_segment') }}" />
                        </div>
                        <div class="form-group col">
                            <label for="store_concept">Store concept</label>
                            <input type="text" class="form-control form-control-sm" id="store_concept" name="store_concept" value="{{ old('store_concept') }}" />
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="input-group input-group-sm mb-3 col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-store text-primary"></i></span>
                            </div>
                            <select id="listaelements" data-placeholder="Elementos..." class="form-control select2" style="width:90%;" multiple  name="store_elementoId[]">
                                @foreach ($elementos as $elemento )
                                    <option value="{{$elemento->id}}">{{$elemento->element_mobiliario}} {{$elemento->element_carteleria}} {{$elemento->element_medida}} {{$elemento->element_material}}</option>                                
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" name="Guardar" onclick="form.submit()">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scriptchosen')
    <script>
        $(document).ready(function() {
        
        $('.select2').select2({
            placeholder: 'Elementos de la store'
            });
        });
    </script>
@endpush
