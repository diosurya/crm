@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Users</h1>
</div>



<div class="table-responsive">
    <a href="{{ url('dashboard/users/create') }}" class="btn btn-sm btn-primary mb-3">Add User</a>

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
          <th scope="col">Role</th>
          <th scope="col">Actioin</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning"><span data-feather="edit-3"></span></a>
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