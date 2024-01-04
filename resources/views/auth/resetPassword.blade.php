@extends('layout.master')

@section('content')
<title>Reset Password</title>
<section style="background-image: url('images/MBP-Background.jpg');">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center min-vh-100">
        {{-- <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="{{ asset('images/login-image.jpg')  }}"
            class="img-fluid" alt="Sample image">
        </div> --}}
        <div class="col-md-9 col-lg-6 col-xl-5 text-white ">
            <h1 style="font-size: 60px; text-shadow: 2px 2px 2px black;">YOUR RELIABLE</h1>
            <h1 style="font-size: 50px; text-shadow: 2px 2px 2px black;">HEALTH CARE COMPANION</h1>
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 bg-white p-5 rounded shadow">
          <form action="{{ route('auth.resetPassword') }}" method="post">
            @csrf
              <h2>Reset Password</h2>
              @if(Session::has('error'))
              <div class="alert alert-danger">{{ Session::get('error') }}</div>
              @elseif(Session::has('success'))
              <div class="alert alert-success">{{ Session::get('success') }}</div>
              @endif

            <div class="form-outline mb-2">
            <label class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control form-control-lg"
                placeholder="Enter the Password" required/>
                <input type="checkbox" onclick="myFunction()">Show Password
            </div>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
          @enderror
            <div class="form-outline mb-2">
                <label class="form-label">Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control form-control-lg"
                    placeholder="Enter the Confirm Password" required/>
                </div>
                @error('confirm_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">You have an account? <a href="{{ route('auth.login') }}"
                    class="link-danger">Login</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
@endsection
