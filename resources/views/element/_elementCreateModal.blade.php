<!-- Modal -->
<div class="modal fade" id="elementCreateModal" tabindex="-1" role="dialog" aria-labelledby="elementCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="elementCreateModalLabel">Nueva campaña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- @include('partials._errores') --}}
                    <form method="post" action="{{ route('element.store') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col">
                                <label for="element_ubicacion">Ubicación</label>
                                <input type="text" class="form-control form-control-sm" id="element_ubicacion" name="element_ubicacion" value="{{ old('element_ubicacion') }}" />
                            </div>
                            <div class="form-group col-2">
                                <label for="element_mobiliario">Mobiliario</label>
                                <input type="text" class="form-control form-control-sm" id="element_mobiliario" name="element_mobiliario" value="{{ old('element_mobiliario') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="element_Propiedad">Propiedad</label>
                                <input type="text" class="form-control form-control-sm" id="element_propiedad" name="element_propiedad" value="{{ old('element_propiedad') }}"/>
                            </div>
                            <div class="form-group col-2">
                                <label for="element_carteleria">Carteleria</label>
                                <input type="text" class="form-control form-control-sm" id="element_carteleria" name="element_carteleria" value="{{ old('element_carteleria') }}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="element_medida">Medida</label>
                                <input type="text" class="form-control form-control-sm" id="element_medida" name="element_medida" value="{{ old('element_medida') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="element_material">Material</label>
                                <input type="text" class="form-control form-control-sm" id="element_material" name="element_material" value="{{ old('element_material') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="element_unit_x_prop">Ud x Prop</label>
                                <input type="number" class="form-control form-control-sm" id="element_unit_x_prop" name="element_unit_x_prop" value="{{ old('element_unit_x_prop') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="element_price">Price</label>
                                <input type="text" class="form-control form-control-sm" id="element_price" name="element_price" value="{{ old('element_price') }}"/>
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
    @endpush
