@extends('layouts.auth-master')
@section('content')


        <form action="{{ url('/login') }}" method="POST">
            @csrf
            @include('layouts.partials.messages')
            <h1>login</h1>
                    <div class="form-floating mb-3">
                    <input type="text" placeholder="Username"  name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" placeholder="Password" name="password" class="form-control" id="exampleInputPassword1">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    </div>
                    <div class="mb-3 form-check text-center">
                    <a href="{{ url('/register') }}">Create account</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login </button>
        </form>
    @endsection
