@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin">
      <img class="mb-4 mx-auto d-block" src="img/logo.png" alt="" width="120" height="160">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>    
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
  
        <button class="w-100 btn btn-lg btn-secondary mt-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now?</a></small>
    </main>
  </div>
</div>
@endsection