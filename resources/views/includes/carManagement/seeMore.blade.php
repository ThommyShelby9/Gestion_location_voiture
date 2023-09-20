<div class="container">
    @if(@isset($id_voiture))
    <h1>Fiche Technique de Voiture</h1>
    <div class="px-1 py-1" style="border:4px solid #0B022F">
        <div class="text-center">
            <div class="" >
                <p><strong style="color: #2D062B">Nom de la voiture:</strong>{{$data_cars->marque->name}}  {{$data_cars->modele_name}}  {{$data_cars->annee}}</p>
            </div>
        </div>
        <div class="d-flex gap-3">
            <div style="width: 30%">
                <div>
                    <p><strong style="color: #2D062B">Marque:</strong> {{$data_cars->marque->name}}</p>
                </div>
                <div class="" >
                    <p><strong style="color: #2D062B">Catégorie:</strong>{{$data_cars->marque->category->name}}</p>
                </div>
                <div>
                    <p><strong style="color: #2D062B">Boite à vitesse:</strong>{{$data->boite_vitesse}}</p>
                </div>
                <div>
                    <p><strong style="color: #2D062B">Puissance:</strong> {{$data->puissance}}</p>
                </div>
                <div class="" >
                    <p><strong style="color: #2D062B">Carburant:</strong>{{$data->carburant}}</p>
                </div>
                <div>
                    <p><strong style="color: #2D062B">Nombre de cylindre:</strong>{{$data->cylindre}}</p>
                </div>
                <div>
                    <p><strong style="color: #2D062B">Soupape:</strong>{{$data->soupape}}</p>
                </div>
                <div>
                    <p><strong style="color: #2D062B">Couleur:</strong>{{$data->couleur}}</p>
                </div>

                
            </div>
            <div style="width: 40%">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="width: 80%; ">
                            <img src="{{ asset($data->image_principale) }}" class="d-block w-100" alt="Image 1" style="width: 100%; height:100%">
                        </div>
                        <div class="carousel-item" style="width: 80%;">
                            <img src="{{ asset($data->image_secondaire) }}" class="d-block w-100" alt="Image 2" style="width: 100%; height:100%">
                        </div>
                        <div class="carousel-item" style="width:80%">
                            <img src="{{ asset($data->image_tertiaire) }}" class="d-block w-100" alt="Image 3" style="width: 100%; height:100%">
                        </div>
                    </div>
    
                    <button class="carousel-control-prev .custom-carousel-control" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="" aria-hidden="true" style="color: #0B022F">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        </span>
                        <span class="visually-hidden">Previous</span>
                    
                    </button>
                    
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="" aria-hidden="true" style="color: #0B022F">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div style="width: 30%">
                <div>
                    <p><strong style="color: #2D062B">Modèle:</strong>{{$data_cars->modele_name}} </p>
                </div>
                <div class="" >
                    <p><strong style="color: #2D062B">Vitesse maximale:</strong>{{$data->vitesse_max}}</p>
                </div>
                <div>
                    <p><strong style="color: #2D062B">Carosserie:</strong>{{$data->carrosserie}}</p>
                </div>
                <div>
                    <p><strong style="color: #2D062B">Transmission:</strong>{{$data->transmission}}</p>
                </div>
                <div class="" >
                    <p><strong style="color: #2D062B">Frein:</strong>{{$data->frein}}</p>
                </div>
                <div>
                    <p><strong style="color: #2D062B">Accélération:</strong>{{$data->acceleration}}</p>
                </div>
              
            </div>
        </div>
    </div>
    @endif
</div>
