<form action="{{ route("campaign.store") }}" method="POST">
    @csrf

    {{-- ... customer name and email fields --}}

    <div class="card">
        <div class="card-header">
            Stores
            <label for="campaign_date">Fecha Campaña</label>
            <input type="date" name="campaign_date" class="form-control"/>
        </div>

        <div class="card-body">
            <table class="table" id="products_table">
                <thead>
                    <tr>
                        <th>Store</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="store0">
                        <td>
                            <select name="stores[]" class="form-control">
                                <option value="">-- choose product --</option>
                                @foreach ($stores as $store)
                                    <option value="{{ $store->id }}">
                                        {{ $store->store_name }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="number" name="quantities[]" class="form-control" value="1" />
                        </td>
                    </tr>
                    <tr id="store1"></tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-12">
                    <button id="add_row" class="btn btn-default pull-left">+ Add Row</button>
                    <button id='delete_row' class="pull-right btn btn-danger">- Delete Row</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
    </div>
</form>