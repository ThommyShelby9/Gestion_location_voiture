<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            <a href="{{ route('addcar') }}" class="btn btn-car ">Ajouter une voiture</a>
        </div>
        <div class="d-flex gap-3">
            <div class="dropdown">
                <button class="btn btn-cat dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Catégorie</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('category') }}">Ajouter</a></li>
                    <li><a class="dropdown-item" href="{{route('modifyCategory')}}">Modifier</a></li>
                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-mark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Marque</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('brand') }}">Ajouter</a></li>
                    <li><a class="dropdown-item" href="{{ route('modifyBrand') }}">Modifier</a></li>
                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-model dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Modèle</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('model') }}">Ajouter</a></li>
                    <li><a class="dropdown-item" href="{{ route('modifyModel') }}">Modifier</a></li>
                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                </ul>
            </div>
        </div>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div>
                <strong>Message Success</strong> <br>
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    </div>
    <h1 class="mt-3">Liste des Voitures</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="">
                <th style="background-color: #b0a0f0; color: #fff;">Nom Voiture</th>
                <th style="background-color: #b0a0f0; color: #fff;">Marque</th>
                <th style="background-color: #b0a0f0; color: #fff;">Modèle</th>
                <th style="background-color: #b0a0f0; color: #fff;">Année</th>
                <th style="background-color: #b0a0f0; color: #fff;">Catégorie</th>
                <th style="background-color: #b0a0f0; color: #fff;">Couleur</th>
                <th style="background-color: #b0a0f0; color: #fff;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $item)
            <tr>
                <td class="align-middle">{{$item->cars_modele->modele_name}}  {{$item->cars_modele->marque->name}}  {{$item->cars_modele->annee}}</td>
                <td class="align-middle">{{$item->cars_modele->marque->name}}</td>
                <td class="align-middle">{{$item->cars_modele->modele_name}}</td>
                <td class="align-middle">{{$item->cars_modele->annee}}</td>
                <td class="align-middle">{{$item->cars_modele->marque->category->name}}</td>
                <td class="align-middle">{{$item['couleur']}}</td>
                <td class="align-middle">
                    <a href="{{route('seeMore', ['id_voiture' => $item['id_voiture']])}}" class="btn" style="color: #CC35C7;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
