@extends('layouts.home')
@section('content')
<div class="container mt-5">

  {{-- Jumbotron --}}
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">

      {{-- Logo --}}
      <img src="/src/PayNote Logo.png" alt="PayNote Logo" style="max-height: 100px; width: auto; object-fit: contain; margin-bottom: 20px;">

      <p class="lead">
        Pencatatan keuangan pribadi yang mudah dan sederhana.
      </p>
    </div>

    {{-- Button --}}
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="{{ route('login') }}" class="btn btn-lg btn-block text-white" style="background-color: #166534;">Login</a>
        </div>
        <div class="col-md-6">
          <a href="{{ route('register') }}" class="btn btn-secondary btn-lg btn-block">Register</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
