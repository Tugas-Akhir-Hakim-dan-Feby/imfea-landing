@extends('frontend.auth.layouts.main')
@section('content')

    <img src="https://i.ibb.co/XWdPc2X/wave-01.png" alt="" class="wave">
    <div class="container">
        <div class="img">
            <img src="https://i.ibb.co/JvXP8rW/phone.png" alt="">
            <a href="{{ route('home') }}" style="width: 50px; height:30px; margin-top:100px;" class="btn btn-outline-secondary btn-sm mt-5">
                <i class="bi bi-arrow-left"></i> 
            </a>
        </div>
        <div class="login-container">
          
            <form class="form-login" action="index.html">
                {{-- <a href="{{ route('home') }}" class="btn btn-outline-secondary mb-">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a> --}}
                <img class="avatar" src="https://i.ibb.co/H4f3Hkv/profile.png" alt="">
              
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"> </i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"> </i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input class="input" type="password">
                    </div>
                </div>
                <input type="submit" class="btn" value="Login">
                <a href="{{ route('register') }}">Belum Punya Akun ? Register Dulu</a>
            </form>
        </div>
    </div>
    

@endsection
