@extends('layouts.login')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <div class="bg-primary d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow p-5 text-center" style="width: 500px; height: 600px;">
            <div class="text-primary mb-2">
                <i class="bi bi-hexagon-fill" style="font-size: 80px;"></i>
            </div>
            <h3 class="mb-5">Employee Data Master</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <hr class="mb-4">
                <div class="mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="Enter Your Email">

                    @error('email')
                        <div class="invalid-feedback text-start">
                            Kolom Email harus diisi!
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Enter Your Password">

                    @error('password')
                        <div class="invalid-feedback text-start">
                            Kolom Password harus diisi!
                        </div>
                    @enderror
                </div>

                <hr class="mb-5">

                <button type="submit" class="btn btn-primary btn-lg w-100">
                    <i class="bi bi-box-arrow-in-right"></i> Log In
                </button>
            </form>
        </div>
    </div>
@endsection
