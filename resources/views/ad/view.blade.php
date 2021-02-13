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
                                @if ($ad->user_id == $user_id)
                                    <button id="{{$ad->id}}" type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
        @endforeach
    </div>
    <script>
        var elements = document.getElementsByClassName("close");

        const myFunction = function () {
            var id = this.getAttribute("id");
            var item = this;
            fetch('{{route('ad.delete', ['ad' => 111])}}'.replace('111', id))
                .then(function () {
                    item.parentElement.parentElement.parentElement.remove();
                });
        };

        for (var i = 0; i < elements.length; i++) {
            elements[i].addEventListener('click', myFunction);
        }

    </script>
@endsection



