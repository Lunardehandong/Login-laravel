@extends('layouts.auth-master')
@section('content')

<form action="{{ url('/register') }}" method="POST">
   @csrf
   @include('layouts.partials.messages')
   <h1>Register</h1>
   <div class="form-floating mb-4">
      <input type="text" name="username" placeholder="Username" class="form-control" id="usernameInput" aria-describedby="usernameHelp">
      <label for="usernameInput" class="form-label">Username</label>   
   </div>
   <div class="form-floating mb-4">
      <input type="text" name="email" placeholder="Email" class="form-control" id="emailInput" aria-describedby="emailHelp">
      <label for="emailInput" class="form-label">Email</label>
    </div>

    <div class="mb-4">
      <select name="tipo" class="form-control">
          <option value="alumno">Alumno</option>
          <option value="maestro">Maestro</option>
      </select>
  </div>

   <div class="form-floating mb-4">
      <input type="password" name="password" placeholder="Password" class="form-control" id="passwordInput">
      <label for="passwordInput" class="form-label">Password</label>
   </div>

   <div class="form-floating mb-4">
      <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" id="confirmPasswordInput">
      <label for="confirmPasswordInput" class="form-label">Confirm Password</label>
    </div>

    <div class="mb-4 form-check text-center">
      <a href="{{ url('/login') }}">Login</a>
    </div>

   <button type="submit" class="btn btn-primary center">Submit</button>
 </form>

@endsection
