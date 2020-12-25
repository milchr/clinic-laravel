@extends('przychodnia.layout')

@section('lista')
 <div class="wrapper">
   <div class="tables">
    <h2> Twoje wizyty </h2>
      <table class='table'>
        <thead>
          <tr>
            <th scope="col"> Lekarz </th>
            <th scope="col"> Data </th>
          </tr>
        </thead>
      <tbody>
        @foreach($visits as $visit)
          @foreach($patients as $patient)
            @foreach($users as $user)
              @if(Auth::user()->id == $user->id)
                @foreach($doctors as $lekarz)
                  @if($user->lastname == $patient->lastname && $patient->id_patient == $visit->id_patient &&  $visit->id_doctor == $lekarz->id_doctor)
                    <tr>
                      <td>{{ $lekarz->firstname }} {{ $lekarz->lastname }} - {{ $lekarz->specialization }}</td>
                      <td>{{ $visit->date }}</td>
                      <td><a href={{"delete_visit/".$visit['id']}} class="btn btn-danger btn-sm active"> Odwołaj wizytę </a> </td>
                    </tr>
                  @endif
                @endforeach
              @endif
            @endforeach
          @endforeach
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
  Twoje wizyty
@endsection
