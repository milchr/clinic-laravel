@extends('przychodnia.layout')

  @section('login')
  <div class="login">
    <div class="loginForm">
      <h2> Zaloguj się </h2>

      @if(isset(Auth::user()->name))
        <script>window.location="/successLogin";</script>
      @endif

      @if($message = Session::get('error'))
        <strong>{{$message}}</strong>
      @endif

      @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      @endif
    <form method="post" action="{{url('/checkLogin')}}" >
      @csrf
      <div class="form-group">
        <label for="email"> </label>
        <input type="text" id="email" name="email" placeholder="Wpisz email"></input>
      </div>
      <div class="form-group">
        <label for="password"> </label>
        <input type="password" id="password" name="password" placeholder="Wpisz hasło"></input>
      </div>
      <button type="submit" class="btn btn-primary" >Zaloguj się </button>
    </form>
  </div>
</div>

@endsection
@section('tytul')
  Wizyty
@endsection
