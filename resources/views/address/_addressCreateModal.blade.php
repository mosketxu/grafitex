<!-- Modal -->
<div class="modal fade" id="addressCreateModal" tabindex="-1" role="dialog" aria-labelledby="addressCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addressCreateModalLabel">Nueva dirección</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- @include('partials._errores') --}}
                    <form method="post" action="{{ route('address.store') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col">
                                <label for="store_id">Store</label>
                                <select class="custom-select custom-select-sm" id="store_id" name="store_id">
                                    <option value="">Selecciona...</option>                                
                                    @foreach ($stores as $store )
                                        <option value="{{$store->id}}">{{$store->id}} {{$store->store_name}} {{$store->store_country}} {{$store->store_area}}</option>                                
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="address_totstore">Totstore</label>
                                <input type="text" class="form-control form-control-sm" id="address_totstore" name="address_totstore" value="{{ old('address_totstore') }}" />
                            </div>
                            <div class="form-group col">
                                <label for="address_countrycode">Country Code</label>
                                <select class="custom-select custom-select-sm" id="address_countrycode" name="address_countrycode">
                                    <option value="">Selecciona...</option>                                
                                    <option value="ES">ES</option>                                
                                    <option value="PT">PT</option>                                
                                    <option value="SP">SP</option>                                
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="address_channel">Channel</label>
                                <select class="custom-select custom-select-sm" id="address_channel" name="address_channel">
                                    <option value="">Selecciona...</option>                                
                                    <option value="Airport">Airport</option>                                
                                    <option value="Dpt.Store">Dpt.Store</option>                                
                                    <option value="Mall">Mall</option>                                
                                    <option value="Outlet">Outlet</option>                                
                                    <option value="Street">Street</option>                                
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="address_storename">Store Name</label>
                                <input type="text" class="form-control form-control-sm" id="address_storename" name="address_storename" value="{{ old('address_storename') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="address_storeconcept">Store Concept</label>
                                <input type="text" class="form-control form-control-sm" id="address_storeconcept" name="address_storeconcept" value="{{ old('address_storeconcept') }}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="address_address">Dirección</label>
                                <input type="text" class="form-control form-control-sm" id="address_address" name="address_address" value="{{ old('address_address') }}"/>
                            </div>
                            <div class="form-group col-3">
                                <label for="address_number">Número</label>
                                <input type="text" class="form-control form-control-sm" id="address_number" name="address_number" value="{{ old('address_number') }}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="address_city">City</label>
                                <input type="text" class="form-control form-control-sm" id="address_city" name="address_city" value="{{ old('address_city') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="address_province">Provincia</label>
                                <input type="text" class="form-control form-control-sm" id="address_province" name="address_province" value="{{ old('address_province') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="address_postalcode">Cod.Postal</label>
                                <input type="text" class="form-control form-control-sm" id="address_postalcode" name="address_postalcode" value="{{ old('address_postalcode') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="address_phone">Phone</label>
                                <input type="text" class="form-control form-control-sm" id="address_phone" name="address_phone" value="{{ old('address_phone') }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="address_email">@email</label>
                                <input type="email" class="form-control form-control-sm" id="address_email" name="address_email" value="{{ old('address_email') }}"/>
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
