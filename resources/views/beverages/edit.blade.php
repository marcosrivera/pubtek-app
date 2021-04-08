@extends('layout', [
    'title' => 'Edit Beverage',
])

@section('title-button')
    <button type="submit" class="btn btn-success" form="editBeverageForm">Update</button>
@endsection

@section('body')
    <div class="row">
        <form id="editBeverageForm" class="col-6 col-lg-4" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $beverage->name }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" max="99.99" class="form-control" id="price" name="price" value="{{ $beverage->price }}">
            </div>

            <input type="hidden" name="id" value="{{ $beverage->id }}">
        </form>
    </div>
@endsection
