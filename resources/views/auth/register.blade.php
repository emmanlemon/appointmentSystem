@include('components.format.header')
<title>Register Form</title>
<section class="vh-150 min-h-full">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="{{ asset('images/login-image.jpg')  }}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{ route('register') }}" method="post" enctype="multipart/form">
            @csrf
            <h2>Register</h2>
            
             <!-- Name input -->
             <div class="form-outline mb-2">
                <label class="form-label">First Name</label>
                  <input type="type" name="first_name" class="form-control form-control-lg"
                    placeholder="Enter First Name" value="{{ old('first_name') }}"/>
                  @error('first_name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
            </div>
            
            <div class="form-outline mb-2">
              <label class="form-label">Middle Name</label>
                <input type="type" name="middle_name" class="form-control form-control-lg"
                  placeholder="Enter Middle Name" value="{{ old('middle_name') }}"/>
                @error('middle_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-2">
              <label class="form-label">Last Name</label>
                <input type="type" name="last_name" class="form-control form-control-lg"
                  placeholder="Enter Last Name" value="{{ old('last_name') }}"/>
                @error('last_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-2">
              <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control form-control-lg"
                  placeholder="Enter Age"  value="{{ old('age') }}"/>
                @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-2">
              <label class="form-label">Address</label>
                <input type="type" name="address" class="form-control form-control-lg"
                  placeholder="Enter Address"  value="{{ old('address') }}"/>
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-2">
              <label class="form-label">Contact number</label>
                <input type="type" name="contact_number" class="form-control form-control-lg"
                  placeholder="Enter Contact Number"  value="{{ old('contact_number') }}"/>
                @error('contact_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Email input -->
            <div class="form-outline mb-2">
            <label class="form-label" for="form3Example3">Email address</label>
              <input type="email" name="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address"  value="{{ old('email') }}"/>
              @error('email')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-2">
                <label class="form-label" for="form3Example3">Password</label>
                <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                placeholder="Enter password"/>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <input type="hidden" name="role" value="0">

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                <button type="submit" class="btn btn-secondary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Reset</button>
            </div>
  
          </form>
        </div>
      </div>
    </div>
  </section>
  {{-- @include('components.format.footer') --}}
