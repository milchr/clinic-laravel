@extends('przychodnia.layout')

@section('lista')
 <div class="wrapper">
  <div class="tables">
  <h2> Pacjenci </h2>
  <table class='table'>
    <thead>
      <tr>
        <th scope="col"> Imię </th>
        <th scope="col"> Nazwisko </th>
        <th scope="col"> Wiek </th>
      </tr>
    </thead>
    <tbody>
  @foreach($dane as $pacjent)
    <tr>
      <td> {{ $pacjent->firstname }} </td>
      <td> {{ $pacjent->lastname }} </td>
      <td> {{ $pacjent->age }} </td>
    @if(isset(Auth::user()->name))
    <td>  <a href={{"delete_patient/".$pacjent['id_patient']}} class="btn btn-danger btn-sm active">Usuń pacjenta</a> </td>
   @endif
   </tr>
  @endforeach
    </tbody>
  </table>
  @if(isset(Auth::user()->name))
    @if(Auth::user()->name == 'admin')
    <hr>
      <nav>
        <ul>
          <li>
            <a href="/create_patient" class="btn btn-primary btn-md active"> Dodaj pacjenta </a>
          </li>
        </ul>
      </nav>
    @endif
   @endif
 </div>
</div>
@endsection

@section('tytul')
  Pacjenci
@endsection
