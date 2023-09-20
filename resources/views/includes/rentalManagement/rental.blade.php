<div class="container">

    <!-- ajouter une location -->
    <div>
        <a href="{{ route('addRental') }}" class="btn btn-mark ">Ajouter une location</a>
    </div>
</div>
<h1 class="mt-3">Liste des Locations</h1>
<!-- Tableau pour afficher la liste des locations -->
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead class="" style="height: 50px">
            <tr>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Client</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Modèle voiture</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Marque</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Année</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Voir fiche technique</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Date de sortie</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Date de retour prévue</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Date de retour effective</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Délai respecté ?</th>
                <th scope="col" style="background-color: #b0a0f0; color: #fff;">Observation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locat as $item)
            <tr>
                <td class="align-middle">{{$item->nom}}  {{$item->prenom}}</td>
                @foreach($item->location as $item)
                <td class="align-middle">{{$item->get_cars->cars_modele->modele_name}}</td>
                <td class="align-middle">{{$item->get_cars->cars_modele->marque->name}}</td>
                <td class="align-middle">{{$item->get_cars->cars_modele->annee}}</td>
                <td class="align-middle"><a href="{{route('seeMore', ['id_voiture' => $item->get_cars->id_voiture])}}">Voir Fiche</a></td>
                @endforeach
                @foreach($location_list as $item)
                <td class="align-middle">{{$item->date_sortie_voiture}}</td>
                <td class="align-middle">{{$item->date_prevue_retour}}</td>
                @endforeach
                <td class="align-middle"> <input type="date" class="form-control" id="date_retour_effective" name="date_retour_effective"></td>
                <td class="align-middle">Délai respecté</td>
                <td class="align-middle">Observation1</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>