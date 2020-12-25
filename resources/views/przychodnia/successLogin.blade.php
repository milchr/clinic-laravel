@extends('przychodnia.layout')

  @section('addForm')
<div class="login">
  <div class="loginForm">
    <h2> Login </h2>
    @if(isset(Auth::user()->name))
      <strong>Witaj {{Auth::user()->name}}</strong>
    @else
      <script>window.location = "/";</script>
    @endif
  </div>
</div>
@endsection
@section('tytul')
  Zalogowana pomyślnie
@endsection
