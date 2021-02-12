@extends('layouts.layout')
@section('content')

    <div class="container">
        @foreach($ads->chunk(3) as $chunk)
            <div class="mb-3
             row">

                @foreach ($chunk as $ad)
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">{{$ad->description}}</h6>
                                <p class="card-text">katogória: {{$ad->category}}</p>
                                <a href="#" class="card-link">{{$ad->price}}€</a>
                                <a href="#" class="card-link">{{$ad->location}}</a>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
        @endforeach
    </div>
@endsection



