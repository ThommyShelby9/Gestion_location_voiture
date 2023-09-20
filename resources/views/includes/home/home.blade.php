<div class="container text-center mt-5">
    <div class="logo">
        <a href="#"> <img src="{{asset('images/logo.png')}}" alt="logo" style="width: 200px; height:200px; border-radius:50%"> </a>
    </div>
    <div class="jumbotron">
        <h1 class="display-4">Bienvenue chez GESCAR, Location de Véhicules</h1>
        <p class="lead welcome-text">La meilleure solution pour louer des véhicules.</p>
        <hr class="my-4">
        <p class="welcome-text">Commencez dès maintenant en vous connectant ou en vous inscrivant.</p>
        <a href="{{route('login')}}" class="btn btn-connexion btn-lg mx-2">Connexion</a>
        <a href="{{route('register')}}" class="btn btn-inscription btn-lg mx-2">Inscription</a>
    </div> 
</div>