@extends('layout')

@section('content')
    <h1>Profile</h1>
    <div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                value="{{ $email }}" readonly>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="test" class="form-control" id="floatingPassword" placeholder="Name" value="{{ $name }}"
                readonly>
            <label for="floatingPassword">Name</label>
        </div>
    </div>
@endsection
