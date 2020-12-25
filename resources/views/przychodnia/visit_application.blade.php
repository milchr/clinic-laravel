@extends('przychodnia.layout')

  @section('addForm')
<div class="login">
  <div class="loginForm">
    <h2> Dodaj zgłoszenie </h2>
    <form method="post" action="create_application">
      @csrf
      <div class="form-group">
        <label for="email"> Email: </label>
        <input type="text" id="email" name="email" placeholder="Wpisz email" ></input>
      </div>
      <div class="form-group">
        <label for="description"> Opis choroby: </label>
        <input type="text" class="description" id="description" name="description" placeholder="Wpisz opis dolegliwości"></input>
      </div>
      <button type="submit" class="btn btn-primary">Wyślij zgłoszenie</button>
    </form>
  </div>
</div>
@endsection
@section('tytul')
  Zgłoś wizytę
@endsection
