@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Data</h1>
</div>

<div class="mb-3">
    <form method="POST" action="/dashboard/products">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label text-md-end">Name Product</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name"  name="name" required autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label text-md-end">Description</label>
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" required>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label text-md-end">Price</label>
            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="price" required>
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <div class="">
                <button type="submit" class="btn btn-success">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>


@endsection