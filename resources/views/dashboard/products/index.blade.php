@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Products</h1>
</div>

<div class="table-responsive">
    @if(auth()->user()->role !== 'staff')
    <a href="{{ url('dashboard/products/create') }}" class="btn btn-sm btn-primary mb-3">Add Products</a>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table class="table table-striped table-sm mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          @if(auth()->user()->role !== 'staff')
          <th scope="col">Actioin</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            @if(auth()->user()->role !== 'staff')
            <td>
                <form action="{{ route('leads.destroy', $product->id) }}" method="POST">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning"><span data-feather="edit-3"></span></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><span data-feather="trash"></span></button>
            </td>
            @endif
        </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>
@endsection