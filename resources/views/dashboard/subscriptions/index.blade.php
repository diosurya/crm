@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Subscriptions</h1>
</div>


<div class="table-responsive">
    <a href="{{ url('dashboard/subscriptions/create') }}" class="btn btn-sm btn-primary mb-3">Add Subscriptions</a>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <table class="table table-striped table-sm mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscriptions as $subscription)
            <tr>
                <td>{{ $subscription->id }}</td>
                <td>{{ $subscription->customer->lead->name }}</td> <!-- Asumsi customer terkait dengan lead -->
                <td>{{ $subscription->product->name }}</td>
                <td>{{ $subscription->start_date }}</td>
                <td>{{ $subscription->end_date ?? 'Ongoing' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection