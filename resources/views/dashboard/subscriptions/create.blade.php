@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Subscription</h1>
</div>

@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="mb-3">
    <form action="{{ route('subscriptions.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="customer_id">Select Customer</label>
            <select name="customer_id" id="customer_id" class="form-control">
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->lead->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="product_id">Select Product</label>
            <select name="product_id" id="product_id" class="form-control">
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="end_date">End Date (Optional)</label>
            <input type="date" name="end_date" id="end_date" class="form-control">
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