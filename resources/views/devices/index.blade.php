@extends('layout', [
    'title' => 'Devices',
])

@section('title-button')
    <a href="{{ route('devices.add') }}" class="btn btn-primary">Add Device</a>
@endsection

@section('body')
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Device ID</th>
                <th>MAC ID</th>
                <th>Location ID</th>
                <th>Bartender</th>
                <th>Beverage</th>
                <th>Enabled</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($devices as $dev)
                <tr>
                    <td>{{ $dev->device_id }}</td>
                    <td>{{ $dev->mac_id }}</td>
                    <td>{{ $dev->location_id ?? 'N/A' }}</td>
                    <td>{{ $dev->bartender->name }}</td>
                    <td>{{ $dev->beverage->name }} (${{ $dev->beverage->price }})</td>
                    <td>@if ($dev->enabled) Yes @else No @endif</td>
                    <td><a href="{{ route('devices.edit', ['id' => $dev->id]) }}">Edit</a> | <a href="{{ route('devices.details', ['id' => $dev->id]) }}">View</a></td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="8">No devices to show.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
