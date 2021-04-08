@extends('layout', [
    'title' => 'Beverages',
])

@section('title-button')
    <a href="{{ route('beverages.add') }}" class="btn btn-primary">Add Beverage</a>
@endsection

@section('body')
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($beverages as $bev)
                <tr>
                    <td>{{ $bev->name }}</td>
                    <td>${{ $bev->price }}</td>
                    <td><a href="{{ route('beverages.edit', ['id' => $bev->id]) }}">Edit</a> | <a href="{{ route('beverages.remove', ['id' => $bev->id]) }}">Remove</a></td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="3">No beverages to show.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
