
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">eduSkillmentor</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link" href="/">Accueil</a>
          </li>
          {{-- ila kan user connecter --}}
          {{-- @auth --}}
      
       {{-- deconnecter --}}
         
          {{-- @endauth --}}
          {{-- ila kan user machi connecter --}}
                
            <a class="nav-link" href="{{route('courses.index')}}">tous les courses</a>
          <li class="nav-item">
            <a  class="nav-link" href=""> nos formations</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="{{route('courses.create')}}">Ajouter cours</a>
          </li>
              </ul>
                  </div>
    </div>
  </nav>



<nav>
    
    
    
</nav>
{{-- affichher une sule fois --}}


