<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <div class="logo text-center" style="margin-top:-30px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo" style="width: 150px; height:150px; border-radius:50%;"> </a>
            </div>
            <h2 class="text-center" style="margin-top: -20px">Modifier Marque</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="mb-3">

                    <select class="form-select" name="" id="" style="width: 100%">
                        <option selected> Sélectionner la modèle à modifier</option>
                        <option value="">Voiture 1</option>
                        <option value="">Voiture 1</option>
                    </select>

                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="modele_name" name="modele_name" value="" placeholder="Entrer le nouveau nom">
                </div>

                <div class="mb-3">

                    <select class="form-select" name="" id="" style="">

                        <option selected> Sélectionner la marque correspondante</option>
                        <option value="">Voiture 1</option>
                        <option value="">Voiture 1</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <input type="number" class="form-control" id="annee" name="annee" value="" placeholder="Entrer l'année">
                </div>

                <div class="d-flex align-items-center justify-content-between mt-2">
                    <div>
                        <button type="submit" class="btn btn-connexion btn-lg ">Modifier</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>