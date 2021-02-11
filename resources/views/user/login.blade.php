@extends('layouts.layout')

@section('content')
    <h1>Prihlásenie</h1>

    <form action="{{route('user.check')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputemail">Email:</label>
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror"
                       id="inputemail" placeholder="Vyplňte email">
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputpassword">Heslo:</label>
                <input type="password" name="password" class="form-control" id="inputpassword"
                       placeholder="Vyplňte heslo">
            </div>
        </div>

        <br><br>
        <input type="submit" value="Prihlásiť sa">

    </form>
@endsection


