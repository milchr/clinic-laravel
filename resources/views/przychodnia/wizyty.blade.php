@extends('przychodnia.layout')

@section('lista')
 <div class="wrapper">
   <div class="tables">
  <h2> Zaplanowane wizyty </h2>
  <table class='table'>
    <thead>
      <tr>
        <th scope="col"> Lekarz </th>
        <th scope="col"> Pacjent </th>
        <th scope="col"> Data </th>
      </tr>
    </thead>
    <tbody>

  @foreach($dane as $wizyta)
    <tr>
      @foreach($doctor as $lekarz)
        @if($lekarz->id_doctor == $wizyta->id_doctor)
          <td>{{ $lekarz->firstname }} {{ $lekarz->lastname }} - {{ $lekarz->specialization }}</td>
          @endif
      @endforeach
      @foreach($patient as $pacjent)
        @if($pacjent->id_patient == $wizyta->id_patient)
          <td>{{ $pacjent->firstname }} {{ $pacjent->lastname }} </td>
          @endif
      @endforeach
      <td>{{ $wizyta->date }} </td>
        @if(isset(Auth::user()->name))
          @if(Auth::user()->name == 'admin')
            <td><a href={{"delete_visit/".$wizyta['id']}} class="btn btn-danger btn-sm active"> Usuń wizytę </a> </td>
            @endif
       @endif
  @endforeach
  </tbody>
</table>
  @if(isset(Auth::user()->name))
  @if(Auth::user()->name == 'admin')
  <hr>
  <nav>
    <ul>
      <li>
          <a href="/create_visit" class="btn btn-primary btn-md active"> Dodaj wizytę </a>
      </li>
    </ul>
   </nav>
   @endif
   @endif
 </div>
 </div>
@endsection
@section('tytul')
  Wizyty
@endsection
