
@extends('frontend.layouts.master')

@section('content')
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="fp__breadcrumb" style="background: url({{ config('settings.breadcrumb') }});">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>Iniciar S<sión/h1>
                    <ul>
                        <li><a href="{{ url('/') }}">inicio</a></li>
                        <li><a href="javascript:;">Iniciar de Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        SIGNIN START
    ==========================-->
    <section class="fp__signin" style="background: url(fronted/images/login_bg.jpg);">
        <div class="fp__signin_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="fp__login_area">
                            <h2>Bienvenido Otravez!</h2>
                            <p>inicia sesión para continuar</p>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label>email</label>
                                            <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label>password</label>
                                            <input type="password" placeholder="Password" name="password">
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="fp__login_imput fp__login_check_area">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" name="remember">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Recordarme
                                                </label>
                                            </div>
                                            <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <button type="submit" class="common_btn">Inicio de Sesión</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="or"><span>ó</span></p>

                            <p class="create_account">No tienes una cuenta ? <a href="{{ route('register') }}">Crear Cuenta</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SIGNIN END
    ==========================-->
@endsection
