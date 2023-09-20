<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <div class="logo text-center" style="margin-top:-30px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo"
                        style="width: 150px; height:150px; border-radius:50%;"> </a>
            </div>
            <h2 class="text-center" style="margin-top: -20px">Ajouter une location</h2>
            <form action="{{route('send_rental')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div>
                            <strong>Message Success</strong> <br>
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div>
                            <strong>Alert</strong> <br>
                            {{ session('errors') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="">
                    <div class="my-2">
                        <select class="form-select" name="id_client" id="" style="width: 100%">
                            <option selected>Liste des clients</option>
                            @foreach($client as $item)
                            <option value="{{$item->id_client}}">{{$item->nom}}  {{$item->prenom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-2">
                        <select class="form-select" name="id_voiture" id="" style="width: 100%">
                            <option selected>Liste des voitures disponibles</option>
                            @foreach($cars as $item)
                            <option value="{{$item->id_voiture}}">{{$item->cars_modele->modele_name}}  {{$item->cars_modele->marque->name}}  {{$item->cars_modele->annee}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label for="date_sortie">Date de sortie</label>
                        <input type="date" class="form-control" id="date_sortie" name="date_sortie_voiture">
                    </div>
                    <div class="form-group my-2">
                        <label for="date_retour">Date de retour prévue</label>
                        <input type="date" class="form-control" id="date_retour" name="date_prevue_retour">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mt-2">
                    <button type="submit" class="btn btn-connexion btn-lg ">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
