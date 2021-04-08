@extends('layout', [
    'title' => 'Add Beverage',
])

@section('title-button')
    <button type="submit" class="btn btn-success" form="addBeverageForm">Add</button>
@endsection

@section('body')
    <div class="row">
        <form id="addBeverageForm" class="col-6 col-lg-4" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" max="99.99" class="form-control" id="price" name="price">
            </div>
        </form>
    </div>
@endsection
