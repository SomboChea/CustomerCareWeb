@extends('layouts.auth')

@section('title','Login')

@section('content')

    <!-- Mixins-->
    <!-- Pen Title-->
    <div class="pen-title">
        {{-- <h1>Not</h1> --}}
    </div>
    <div class="container">
        <div class="card">
          <img src="{{asset('assets/images/logo.png')}}" class="img-fluid">
            <h1 class="title">Login</h1>
            <form action="{{ route('auth.login') }}" method="post">

                <div class="input-container">
                    <input type="text" id="username" name="username" required="required" />
                    <label for="username">Username</label>
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="password" id="password" name="password" required="required" />
                    <label for="password">Password</label>
                    <div class="bar"></div>
                </div>
                <div class="button-container">
                    <button><span>Go</span></button>
                </div>
                {{-- <div class="footer"><a href="#">Forgot your password?</a></div> --}}
            </form>
        </div>
        {{-- <div class="card alt">
        <div class="toggle"></div>
        <h1 class="title">Register
            <div class="close"></div>
        </h1>
        <form>
            <div class="input-container">
            <input type="text" id="Username" required="required"/>
            <label for="Username">Username</label>
            <div class="bar"></div>
            </div>
            <div class="input-container">
            <input type="password" id="Password" required="required"/>
            <label for="Password">Password</label>
            <div class="bar"></div>
            </div>
            <div class="input-container">
            <input type="password" id="Repeat Password" required="required"/>
            <label for="Repeat Password">Repeat Password</label>
            <div class="bar"></div>
            </div>
            <div class="button-container">
            <button><span>Next</span></button>
            </div>
        </form>
        </div> --}}
    </div>

@endsection()
