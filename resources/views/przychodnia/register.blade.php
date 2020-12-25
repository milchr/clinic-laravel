@extends('przychodnia.layout')

@section('login')

<div class="login">
  <div class="loginForm">
    <h2> Zarejestruj się </h2>
    <form method="post" action="{{url('register')}}" >
      @csrf
      <div class="form-group">
        <label for="name"> Login: </label>
        <input type="text" id="name" name="name" placeholder="Wpisz nazwę użytkownika"></input>
      </div>
      <div class="form-group">
        <label for="firstname"> Imię: </label>
        <input type="text" id="firstname" name="firstname" placeholder="Wpisz imię"></input>
      </div>
      <div class="form-group">
        <label for="lastName"> Nazwisko: </label>
        <input type="text" id="lastname" name="lastname" placeholder="Wpisz nazwisko"></input>
      </div>
      <div class="form-group">
        <label for="email"> Email: </label>
        <input type="text" id="email" name="email" placeholder="Wpisz email"></input>
      </div>
      <div class="form-group">
        <label for="password"> Hasło: </label>
        <input type="password" id="password" name="password" placeholder="Wpisz Hasło"></input>
      </div>
      <button type="submit" class="btn btn-primary"> Zarejestruj się </button>
    </form>
  </div>
</div>

@endsection
@section('tytul')
  Zarejestruj się
@endsection
