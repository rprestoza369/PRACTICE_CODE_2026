@extends('layouts.app', ['page_title' => 'Edit User Info'])
@section('content')
<div class="col-md-6">
    @if(session('success'))
    <div class="alert alert-success" role="alert">
          {{ session('success') }}            
    </div>
    @endif

    <div class="d-flex justify-end mb-3">
        <a href="{{ url('users/create') }}" class="btn btn-outline-primary btn-sm">Add New User</a>
    </div>

    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Edit Information</div>
        </div>


        <form action="{{ url('users', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf   
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" id="fname" value="{{ $user->fname }}" />
                    @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>

                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" id="lname" value="{{ $user->lname }}" />
                    @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $user->email }}" />
                    @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>

                <div class="mb-3">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" value="{{ $user->contact_number }}" />
                    @error('contact_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>

                <div class="mb-3">
                    <label for="birthdate" class="form-label">BirthDate</label>
                    <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate" value="{{ $user->birthdate }}" />
                    @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Complete Address</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ $user->address }}" />
                    @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" />
                </div>

                <div class="input-group mb-3">
                    <input type="file" name="profile_photo" class="form-control" id="profile_photo" />
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection