@extends('layout', [
    'title' => 'Edit Bartender',
])

@section('title-button')
    <button type="submit" class="btn btn-success" form="editBartenderForm">Update</button>
@endsection

@section('body')
    <div class="row">
        <form id="editBartenderForm" class="col-6 col-lg-4" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $bartender->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $bartender->email }}">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="active" value="1" @if ($bartender->active) checked @endif>
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="inactive" value="0" @if (!$bartender->active) checked @endif>
                <label class="form-check-label" for="inactive">Inactive</label>
            </div>
        </form>
    </div>
@endsection
