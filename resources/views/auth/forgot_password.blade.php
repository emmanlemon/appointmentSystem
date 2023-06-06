{{-- @extends('extension.app')
@section('app')
<div class="card text-center" style="width: 300px;">
    <div class="card-header h5 text-white bg-primary">Password Reset</div>
    <div class="card-body px-5">
        <p class="card-text py-2">
            Enter your email address and we'll send you an email with instructions to reset your password.
        </p>
        <form action="{{ route('auth.forgotpassword') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(session('message'))
            <span class="alert alert-danger p-2">{{ session('message') }}</span>
            @endif
            <div class="form-outline">
                <input type="email" name="email" id="typeEmail" class="form-control my-3" />
                <label class="form-label" for="typeEmail">Email input</label>
            </div>
            <button class="btn btn-primary w-100">Reset password</button>
        </form>
        <div class="d-flex justify-content-between mt-4">
            <a class="" href="#">Login</a>
            <a class="" href="#">Register</a>
        </div>
    </div>
</div>
@endsection --}}