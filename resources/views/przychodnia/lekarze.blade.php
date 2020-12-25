@extends('przychodnia.layout')

@section('lista')
 <div class="wrapper">
   <div class="tables">
     <h2> Lekarze </h2>
     <table class='table'>
       <thead>
         <tr>
           <th scope="col"> Imię </th>
           <th scope="col"> Nazwisko </th>
           <th scope="col"> Specjalizacja </th>
         </tr>
       </thead>
    <tbody>
  @foreach($dane as $lekarz)
    <tr>
      <td>{{ $lekarz->firstname }} </td>
      <td>{{ $lekarz->lastname }} </td>
      <td>{{ $lekarz->specialization }} </td>
    @if(isset(Auth::user()->name))
      @if(Auth::user()->name == 'admin')
        <td>   <a href={{"delete_doctor/".$lekarz['id_doctor']}} class="btn btn-danger btn-sm active"> Usuń lekarza </a> </td>
      @endif
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
            <a href="/create_doctor" class="btn btn-primary btn-md active"> Dodaj lekarza </a>
          </li>
        </ul>
      </nav>
    @endif
   @endif
 </div>
</div>
@endsection

@section('tytul')
  Lekarze
@endsection
