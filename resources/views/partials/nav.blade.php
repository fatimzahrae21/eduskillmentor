
 

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
            <li> <a class="nav-link" href="{{route('courses.index')}}">tous les courses</a></li>    
           
         
          <li class="nav-item">
            <a  class="nav-link" href="{{route('courses.create')}}">Ajouter cours</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="{{route('teams.team')}}">teams</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
              </ul>
                  </div>
    </div>
  </nav>



<nav>
    
    
    
</nav>
{{-- affichher une sule fois --}}


</body>
</html>