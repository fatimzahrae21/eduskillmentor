
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">social network</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link" href="{{route('homepage')}}">Accueil</a>
          </li>
          {{-- ila kan user connecter --}}
          {{-- @auth --}}
      
       {{-- deconnecter --}}
         
          {{-- @endauth --}}
          {{-- ila kan user machi connecter --}}
          @guest
          <li class="nav-item">
            <a  class="nav-link" href="{{route('login.show')}}">Se connecter</a>
          </li>
          @endguest          
            <a class="nav-link" href="{{route('profiles.index')}}">tous les profils</a>
          <li class="nav-item">
            <a  class="nav-link" href="{{route('infos.index')}}">Mon informations</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="{{route('create')}}">Ajouter Profile</a>
          </li>
              </ul>
              @auth
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 {{auth()->user()->name}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a  class="dropdown-item" href="{{route('login.logout')}}">Déconnecter</a></li>
                </ul>
              </div>
              @endauth
      </div>
    </div>
  </nav>



<nav>
    
    
    
</nav>
{{-- affichher une sule fois --}}


