@extends('layout', [
    'title' => 'Add Bartender',
])

@section('title-button')
    <button type="submit" class="btn btn-success" form="addBartenderForm">Add</button>
@endsection

@section('body')
    <div class="row">
        <form id="addBartenderForm" class="col-6 col-lg-4" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="active" value="1" checked>
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" value="0" id="inactive">
                <label class="form-check-label" for="inactive">Inactive</label>
            </div>
        </form>
    </div>
@endsection
