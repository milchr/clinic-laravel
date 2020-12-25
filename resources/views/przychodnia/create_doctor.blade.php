@extends('przychodnia.layout')

  @section('addForm')
<div class="login">
  <div class="addForm">
    <h2> Dodaj lekarza </h2>
    <form method="post" action="create_doctor">
      @csrf
    <div class="form-group">
      <label for="firstName"> Imię: </label>
      <input type="text" id="firstName" name="firstName" placeholder="Wpisz imię"></input>
    </div>
    <div class="form-group">
      <label for="lastName"> Nazwisko: </label>
      <input type="text" id="lastName" name="lastName" placeholder="Wpisz nazwisko"></input>
    </div>
    <div class="form-group">
      <label for="specialization"> Specjalizacja: </label>
      <input type="text" id="specialization" name="specialization" placeholder="Wpisz specjalizacje"></input>
    </div>
      <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
  </div>
</div>
@endsection
@section('tytul')
  Dodaj lekarza
@endsection
