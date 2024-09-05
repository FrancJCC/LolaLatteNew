@extends('frontend.layouts.master')

@section('content')
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="fp__breadcrumb" style="background: url({{ config('settings.breadcrumb') }});">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>Olvidar Contrseña</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="javascript:;">Olvidar Contrseña</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        FORGOT PASSWORD START
    ==========================-->
    <section class="fp__signin" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
        <div class="fp__signin_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="fp__login_area">
                            <h2>Bienvenido otravez!</h2>
                            <p>Olvidar Contraseña</p>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label>email</label>
                                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                        </div>
                                    </div>


                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <button type="submit" class="common_btn">verificar email</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="create_account d-flex justify-content-between">
                                <a href="{{ route('login') }}">Iniciar Sesión</a>
                                <a href="{{ route('register') }}">Crear Cuenta</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        FORGOT PASSWORD END
    ==========================-->
@endsection
