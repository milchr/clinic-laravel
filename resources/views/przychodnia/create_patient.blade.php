@extends('przychodnia.layout')

  @section('addForm')
  <div class="login">
    <div class="addForm">
      <h2>Dodaj pacjenta </h2>
      <form method="post" action="create_patient">
        @csrf
        <div class="form-group">
          <label for="firstName"> Imię </label>
          <input type="text" id="firstName" name="firstName" placeholder="Wpisz imię"></input>
        </div>
        <div class="form-group">
          <label for="lastName"> Nazwisko </label>
          <input type="text" id="lastName" name="lastName" placeholder="Wpisz nazwisko"></input>
        </div>
        <div class="form-group">
          <label for="age"> Wiek </label>
          <input type="text" id="age" name="age" placeholder="Wpisz wiek"></input>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
      </form>
  </div>
</div>
@endsection
@section('tytul')
  Dodaj pacjenta
@endsection
