@extends('layouts.master')

{{-- @section('content')
<div class="container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        @error('email')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <button type="submit">Login</button>
    </form>
</div>
@endsection --}}
@section('content')

    <!-- login -->
    <section class="wrap__section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mx-auto" style="max-width: 380px;">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Log in</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <a href="#" class="btn btn-facebook btn-block mb-2 text-white"> <i
                                        class="fa fa-facebook"></i> &nbsp; Sign
                                    in
                                    with
                                    Facebook</a>
                                <a href="#" class="btn btn-primary btn-block mb-4"> <i class="fa fa-google"></i> &nbsp;
                                    Sign in with
                                    Google</a>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" name="password">
                                </div>

                                <div class="form-group">
                                    <a href="#" class="float-right">Forgot password?</a>
                                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                                            class="custom-control-input" checked="">
                                        <span class="custom-control-label"> Remember </span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Login </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <p class="text-center mt-4 mb-0">Don't have account? <a href="#">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end login -->


@endsection
