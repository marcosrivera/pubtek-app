@extends('layout', [
    'title' => 'Edit Device',
])

@section('title-button')
    <button type="submit" class="btn btn-success" form="editDeviceForm">Update</button>
@endsection

@section('body')
    <div class="row">
        <form id="editDeviceForm" class="col-6 col-lg-4" method="post">
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
                <input type="text" class="form-control" id="bartender" name="bartender_id">
            </div>
            <div class="mb-3">
                <label for="beverage" class="form-label">Beverage</label>
                <input type="text" class="form-control" id="beverage" name="beverage_id">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="enabled" name="enabled">
                <label class="form-check-label" for="enabled">Enabled</label>
            </div>
        </form>
    </div>
@endsection
