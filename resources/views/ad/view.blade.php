@extends('layouts.layout')
@section('content')

    @if($ads->isEmpty())
        <div class="alert alert-primary" role="alert">
            Žiadne inzeráty neboli nájdené!
        </div>
    @endif

    <div class="container">
        @foreach($ads->chunk(3) as $chunk)
            <div class="mb-3 row">
                @foreach ($chunk as $ad)
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <span class="description">{{$ad->description}}</span>
                                </h6>
                                <p class="card-text">katogória: <span class="category">{{$ad->category}}</span></p>
                                <p class="card-text">Email: {{$ad->owner->email}}</p>
                                @if (!is_null($ad->owner->phone_number))
                                    <p class="card-text">Telefón: {{$ad->owner->phone_number}}</p>
                                @endif
                                <a href="#" class="card-link"> <span class="name">{{$ad->name}}</span></a>
                                <a href="#" class="card-link"> <span class="price">{{$ad->price}}</span>€</a>
                                <a href="#" class="card-link"> <span class="location">{{$ad->location}}</span></a>

                                @if (!is_null($loggedUser))
                                    @if ($ad->user_id === $loggedUser->id || $loggedUser->isAdmin())
                                        <i class="bi bi-pencil edit ml-4" data-toggle="modal"
                                           data-target="#editing"></i>
                                        <span id="{{$ad->id}}" class="close" aria-hidden="true">&times;</span>
                                    @endif
                                @endif


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="modal fade" id="editing" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <span id="modalId"></span>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Úprava inzerátu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="modalErrors"></div>
                    <form action="#" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="inputPopis">Popis:</label>
                                <textarea id="inputPopis" rows="4" name="popis" cols="50"
                                          placeholder="Sem napíšte inzerát..." required> </textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="inputNazov">Názov:</label>
                                <input type="text" name="nazov" class="form-control" id="inputNazov"
                                       placeholder="Vyplňte názov produktu" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="inputCena">Cena:</label>
                                <input type="number" name="cena" class="form-control" id="inputCena"
                                       placeholder="Vyplňte cenu v eurách" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="inputLokalita">Lokalita:</label>
                                <input type="text" name="lokalita" class="form-control"
                                       id="inputLokalita"
                                       placeholder="Napíšte lokalitu" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="inputKategoria">kategória:</label>

                                <select class="form-control form-control-lg"
                                        name="kategoria" id="inputKategoria" required>

                                    <option value="Autá">Autá</option>
                                    <option value="Oblečenie">Oblečenie</option>
                                    <option value="Elektronika">Elektronika</option>
                                    <option value="Dom a záhrada">Dom a záhrada</option>
                                    <option value="Reality, Byty, Domy">Reality, Byty, Domy</option>
                                    <option value="Stroje">Stroje</option>
                                    <option value="Mobily">Mobily</option>
                                    <option value="Motorky">Motorky</option>
                                    <option value="Práca">Práca</option>
                                    <option value="Počítače">Počítače</option>
                                    <option value="Hudba">Hudba</option>
                                    <option value="Zvieratá">Zvieratá</option>
                                    <option value="Ostatné">Ostatné</option>
                                    <option value="Služby">Služby</option>
                                    <option value="Knihy">Knihy</option>
                                    <option value="Nábytok">Nábytok</option>
                                    <option value="Športové potreby">Športové potreby</option>
                                    <option value="Zdravie a krása">Zdravie a krása</option>
                                    <option value="Deti a detské potreby"> Deti a detské potreby
                                    </option>

                                </select>

                            </div>
                        </div>
                        <button id="submitButton" class="btn btn-primary">Upraviť inzerát</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvoriť
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var deleteButtons = document.getElementsByClassName("close");

        const deleting = function () {
            var id = this.getAttribute("id");
            var item = this;
            fetch('{{route('ad.delete', ['ad' => ':ad'])}}'.replace(':ad', id))
                .then(response => response.json())
                .then(function (response) {
                    if (response.success == true) {
                        item.parentElement.parentElement.parentElement.remove();
                    }
                });
        };

        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener('click', deleting);
        }

        var editButtons = document.getElementsByClassName("edit");


        const editing = function () {
            var cardBody = this.parentElement;
            var modalErrors = document.getElementById('modalErrors');
            modalErrors.innerHTML = "";
            document.getElementById("modalId").innerText = cardBody.querySelector('.close').getAttribute('id');
            document.getElementById("inputPopis").value = cardBody.querySelector('.description').innerText;
            document.getElementById("inputNazov").value = cardBody.querySelector('.name').innerText;
            document.getElementById("inputCena").value = cardBody.querySelector('.price').innerText;
            document.getElementById("inputLokalita").value = cardBody.querySelector('.location').innerText;
            document.getElementById("inputKategoria").value = cardBody.querySelector('.category').innerText;
        }

        for (var i = 0; i < editButtons.length; i++) {
            editButtons[i].addEventListener('click', editing);
        }

        const submit = function (event) {
            event.preventDefault();
            var id = document.getElementById("modalId").innerText;
            var formData = new FormData();
            formData.append('popis', document.getElementById("inputPopis").value);
            formData.append('nazov', document.getElementById("inputNazov").value);
            formData.append('cena', document.getElementById("inputCena").value);
            formData.append('lokalita', document.getElementById("inputLokalita").value);
            formData.append('kategoria', document.getElementById("inputKategoria").value);

            fetch('{{route('ad.edit', ['ad'=> ':ad'])}}'.replace(':ad', id), {
                body: formData,
                method: 'POST',
            })
                .then(response => response.json())
                .then(function (response) {
                    if (response.success == true) {
                        location.reload();
                    } else {
                        //https://stackoverflow.com/a/5677816
                        if (response.errors) {
                            var modalErrors = document.getElementById('modalErrors');
                            modalErrors.innerHTML = "";
                            for (var key in response.errors) {
                                response.errors[key].forEach(function (message) {
                                    modalErrors.innerHTML += "<p>" + message + "</p>";
                                });
                            }
                        }
                    }
                });
        }

        document.getElementById("submitButton").addEventListener('click', submit);

    </script>
@endsection



