@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Data</h1>
</div>

<div class="mb-3">
    <form method="POST" action="/dashboard/leads">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label text-md-end">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name"  name="name" required autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label text-md-end">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@mail.com" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label text-md-end">Phone</label>
            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="company" class="form-label text-md-end">Company</label>
            <input id="company" type="company" class="form-control @error('company') is-invalid @enderror" name="company" placeholder="Company" required>
            @error('company')
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