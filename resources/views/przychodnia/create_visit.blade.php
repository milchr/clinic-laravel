@extends('przychodnia.layout')

  @section('addForm')

<div class="wrapper-visit">
  <div class="tables">
    <h2> Zgłoszenia pacjentów</h2>
    <table class='table'>
      <thead>
       <tr>
         <th scope="col"> Imię </th>
         <th scope="col"> Nazwisko </th>
         <th scope="col"> Dolegliwość </th>
       </tr>
      </thead>
      <tbody>
        @foreach($applications as $application)
          <tr>
            @foreach($users as $user)
              @if($user->id == $application->id_user)
                <td> {{ $user->firstname }} </td>
                <td> {{ $user->lastname }} </td>
                <td> {{ $application->description }} </td>
              @endif
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="login">
  <div class="addForm">
    <h2> Dodaj wizytę </h2>
    <form method="post" action="create_visit">
      @csrf
      <div class="form-group">
      <label for="id_doctor"> Wybierz lekarza: </label>
      <select name="id_doctor" class="form-control">
        @foreach($doctors as $doctor)
          <option value="{{$doctor->id_doctor}}"> {{$doctor->firstname}} {{$doctor->lastname}} - {{$doctor->specialization }}</option>
        @endforeach
      </select>
    </div>
     <div class="form-group">
      <label for="id_patient"> Wybierz pacjenta: </label>
      <select name="id_patient" class="form-control">
        @foreach($patients as $patient)
          <option value="{{$patient->id_patient}}"> {{$patient->firstname}} {{$patient->lastname}} </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="date"> Data </label>
        <input type="date" name="date" placeholder="Wprowadź datę"/>
      </div>
      <button type="submit" class="btn btn-primary">Dodaj wizytę</button>
    </form>
  </div>
</div>
@endsection
@section('tytul')
  Dodaj wizytę
@endsection
