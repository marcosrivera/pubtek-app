@extends('layout', [
    'title' => 'Add Device',
])

@section('title-button')
    <button type="submit" class="btn btn-success" form="addDeviceForm">Add</button>
@endsection

@section('body')
    <div class="row">
        <form id="addDeviceForm" class="col-6 col-lg-4" method="post">
            @csrf
            <div class="mb-3">
                <label for="deviceId" class="form-label">Device ID</label>
                <input type="text" class="form-control" id="deviceId" name="device_id">
            </div>
            <div class="mb-3">
                <label for="macId" class="form-label">MAC ID</label>
                <input type="text" class="form-control" id="macId" name="mac_id">
            </div>
            <div class="mb-3">
                <label for="locationId" class="form-label">Location ID</label>
                <input type="text" class="form-control" id="locationId" name="location_id">
            </div>
            <div class="mb-3">
                <label for="bartender" class="form-label">Bartender</label>
                <select class="form-select" name="bartender_id">
                    <option selected>--Select--</option>
                    @foreach($bartenders as $bt)
                        <option value="{{ $bt->id }}">{{ $bt->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="beverages" class="form-label">Beverage</label>
                <select class="form-select" name="beverage_id">
                    <option selected>--Select--</option>
                    @foreach($beverages as $bev)
                        <option value="{{ $bev->id }}">{{ $bev->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="enabled" id="enabled" value="1" checked>
                <label class="form-check-label" for="enabled">Enabled</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="enabled" value="0" id="disabled">
                <label class="form-check-label" for="disabled">Disabled</label>
            </div>
        </form>
    </div>
@endsection
