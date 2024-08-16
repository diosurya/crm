@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Leads</h1>
</div>


<div class="table-responsive">
    <a href="{{ url('dashboard/leads/create') }}" class="btn btn-sm btn-primary mb-3">Add Leads</a>

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
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Company</th>
          <th scope="col">Status</th>
          <th scope="col">Actioin</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($leads as $lead)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $lead->name }}</td>
            <td>{{ $lead->email }}</td>
            <td>{{ $lead->phone }}</td>
            <td>{{ $lead->company }}</td>
            <td><span class="badge bg-primary">{{ $lead->status }}</span></td>
            <td>
                <form action="{{ route('leads.destroy', $lead->id) }}" method="POST">
                <a href="{{ route('leads.edit', $lead->id) }}" class="btn btn-sm btn-warning"><span data-feather="edit-3"></span></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><span data-feather="trash"></span></button>
            </td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>
@endsection