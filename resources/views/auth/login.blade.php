@include('components.format.header')
<title>Login Form</title>
<section style="background-image: url('images/MBP-Background.jpg');">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        {{-- <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="{{ asset('images/login-image.jpg')  }}"
            class="img-fluid" alt="Sample image">
        </div> --}}
        <div class="col-md-9 col-lg-6 col-xl-5 text-white ">
            <h1 style="font-size: 60px; text-shadow: 2px 2px 2px black;">YOUR RELIABLE</h1>
            <h1 style="font-size: 50px; text-shadow: 2px 2px 2px black;">HEALTH CARE COMPANION</h1>
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 bg-white p-5 rounded shadow">
          <form action="{{ route('auth.login') }}" method="post" enctype="multipart/form">
            @csrf
              <h2>Login</h2>
              @if(Session::has('error'))
              <div class="alert alert-danger">{{ Session::get('error') }}</div>
              @elseif(Session::has('success'))
              <div class="alert alert-success">{{ Session::get('success') }}</div>
              @endif
            <!-- Email input -->
            <div class="form-outline mb-2">
            <label class="form-label">Email address</label>
              <input type="email" name="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" value="{{ old('email') }}"/>
              @error('email')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-2">
                <label class="form-label" for="form3Example3">Password</label>
                <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                placeholder="Enter password" />
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('auth.register') }}"
                  class="link-danger">Register</a></p>
                  {{-- <p><a href="{{ route('auth.forgot_password') }}">Forgot your password?</a>                </p> --}}

            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  @include('components.format.footer')
