@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Projects</h1>
</div>

<div class="table-responsive">
    <a href="{{ url('dashboard/projects/create') }}" class="btn btn-sm btn-primary mb-3">Add Projects</a>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Lead</th>
                <th>Manager</th>
                <th>Created By</th>
                <th>Status</th>
                @if(auth()->user()->role !== 'staff')
                <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->lead->name }}</td>
                <td>{{ $project->manager->name }}</td>
                <td>{{ $project->by->name }}</td>
                <td>
                    @if($project->project_status == 'pending')
                    <span class="badge bg-warning">{{ $project->project_status }}</span>
                    @elseif($project->project_status == 'approved')
                    <span class="badge bg-success">{{ $project->project_status }}</span>
                    @else
                    <span class="badge bg-danger">{{ $project->project_status }}</span>
                    @endif
                </td>
                @if(auth()->user()->role !== 'staff')
                <td>
                    @if($project->project_status == 'pending')
                        <a href="{{ route('projects.approve', $project->id) }}" class="btn btn-sm btn-success">Approve</a>
                        <a href="{{ route('projects.reject', $project->id) }}" class="btn btn-sm btn-danger">Reject</a>
                    @endif
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection