@extends('layout/aplikasi')

<div class="container-fluid pt-1">
    @include('component/msg')
</div>

@section('konten')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-3 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-2 d-flex justify-content-center align-items-center left-box"
            style="background-color: #292621">
            <div>
                <p class="f-kasirek">KASIREK.</p>
            </div>
        </div>
        <div class="col-md-6 right-box">
            <div class="row align-items-center m-5">
                <div class="header-text">
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="f-login fw-bold">LOGIN</p>
                    </div>
                    <form action="/session/login" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="name" class="form-control form-control-lg bg-light fs-6" placeholder="Username"
                                name="name" value="{{ Session::get('name') }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password" name="password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-end">
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-outline-dark rounded-pill w-100 fw-bold">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection