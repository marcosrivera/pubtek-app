@extends('layout', [
    'title' => 'Bartenders',
])

@section('title-button')
    <a href="{{ route('bartenders.add') }}" class="btn btn-primary">Add Bartender</a>
@endsection

@section('body')
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bartenders as $bt)
                <tr>
                    <td>{{ $bt->name }}</td>
                    <td>{{ $bt->email }}</td>
                    <td>@if ($bt->active) <span class="badge bg-success">Active</span> @else <span class="badge bg-danger">Inactive</span> @endif</td>
                    <td><a href="{{ route('bartenders.edit', ['id' => $bt->id]) }}">Edit</a> | <a href="{{ route('bartenders.remove', ['id' => $bt->id]) }}">Remove</a></td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="4">No bartenders to show.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
