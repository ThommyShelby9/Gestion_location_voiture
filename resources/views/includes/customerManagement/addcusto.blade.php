<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <div class="logo text-center" style="margin-top:-30px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo" style="width: 150px; height:150px; border-radius:50%;"> </a>
            </div>
            <h2 class="text-center" style="margin-top: -20px">Ajouter un client</h2>
            <form action="{{route('send_customers')}}" method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="text" class="form-control" id="tel" name="tel">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
                <div class="form-group">
                    <label for="photo" class="form-label">Ajouter photo du client :</label>
                    <input class="form-control" type="file" value="" name="photo" >
                </div>
                <div class="form-group">
                    <label for="cni">No Carte Nationale d'Identité</label>
                    <input type="text" class="form-control" id="cni" name="cni">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <div>
                        <button type="submit" class="btn btn-connexion btn-lg ">Enregistrer</button>
                    </div>
                  
                </div>
            </form>
        </div>
    </div>
</div>