<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <div class="logo text-center" style="margin-top:-30px">
                <a href="#"> <img src="{{ asset('images/logo.png') }}" alt="logo" style="width: 150px; height:150px; border-radius:50%;"> </a>
            </div>
            <h2 class="text-center" style="margin-top: -20px">Ajouter une Catégorie</h2>
            <form action="{{route('add_categorie')}}" method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="name">Catégorie</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
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