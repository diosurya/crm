@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Customers</h1>
</div>


<div class="table-responsive">
    {{-- <a href="{{ url('dashboard/leads/create') }}" class="btn btn-sm btn-primary mb-3">Add Customers</a> --}}

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
                <th>Customer Name</th>
                <th>Subscriptions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->lead->name }}</td>
                <td>
                    <ul>
                        @foreach($customer->subscriptions as $subscription)
                            <li>{{ $subscription->product->name }} ({{ $subscription->start_date }} - {{ $subscription->end_date ?? 'Ongoing' }})</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection