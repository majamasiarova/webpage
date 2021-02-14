@extends('layouts.layout')

@section('content')
    <div class="m-5">
        <h1>Prihlásenie</h1>
        <form action="{{route('user.check')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="inputemail">Email:</label>
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror"
                           id="inputemail" placeholder="Vyplňte email">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="inputpassword">Heslo:</label>
                    <input type="password" name="password" class="form-control" id="inputpassword"
                           placeholder="Vyplňte heslo">
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Prihlásiť sa"/>
            <br/>
            <br/>

            <a href="{{route('user.register')}}" class="btn btn-success">Zaregistrovať sa</a>

        </form>
    </div>
@endsection


