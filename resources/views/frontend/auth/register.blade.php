@extends('frontend.auth.layouts.main')
@section('content')



    <img src="https://i.ibb.co/XWdPc2X/wave-01.png" alt="" class="wave">
    <div class="container">
        <div class="img">
            <img src="https://i.ibb.co/JvXP8rW/phone.png" alt="">
        </div>
        <div class="login-container">
            <form class="form-login" action="" method="">
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

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input class="input" type="email">
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
                <input type="submit" class="btn" value="Register">
                <a href="{{ route('login') }}">Sudah Punya Akun ? Login Sekarang</a>
            </form>
        </div>
    </div>
    

@endsection
