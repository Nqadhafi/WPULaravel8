@extends('layouts.app')
@section('konten')
<div class="row justify-content-center">
    <div class="col-lg-6">
        
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
          @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
          

              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
              </form>
              <small class="d-block text-center mt-3">
                Already Registered? <a href="/login" class="text-decoration-none">Login Now!</a>
              </small>
          </main>
    </div>
</div>
@endsection