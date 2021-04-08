@extends('layout', [
    'title' => 'Device 1 Details',
])

@section('title-button')
    <a href="{{ route('devices.edit', ['id' => $device->id]) }}" class="btn btn-primary">Edit Device</a>
@endsection

@section('body')
    <table class="table table-hover w-50">
        <tbody>
            <tr>
                <td><strong>Device ID</strong></td>
                <td>{{ $device->device_id }}</td>
            </tr>
            <tr>
                <td><strong>MAC ID</strong></td>
                <td>{{ $device->mac_id }}</td>
            </tr>
            <tr>
                <td><strong>Location ID</strong></td>
                <td>{{ $device->location_id ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td><strong>Bartender</strong></td>
                <td>{{ $device->bartender->name }}</td>
            </tr>
            <tr>
                <td><strong>Beverage</strong></td>
                <td>{{ $device->beverage->name }} (${{ $device->beverage->price }})</td>
            </tr>
            <tr>
            <tr>
                <td><strong>Enabled</strong></td>
                <td>
                    @if ($device->enabled)
                        <span class="badge bg-success">Yes</span>
                    @else
                        <span class="badge bg-danger">No</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
@endsection
