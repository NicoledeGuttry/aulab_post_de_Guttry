<nav class="navbar navbar-expand-lg bg-secondaryC">
  <div class="container-fluid">
    <i class="bi bi-feather text-main"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ms-5">
          <a class="nav-link text-blackC" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-blackC" href="#">Link</a>
        </li>
        {{-- sezione per utente loggato --}}
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-blackC" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao,{{Auth::user()->name}}!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-main" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
              @csrf
            </form>
             <li><a class="dropdown-item text-blackC" href="{{route('article.create')}}">Inserisci articolo</a></li>
          </ul>
        </li>
        @endauth
        {{-- sezione per utente guest --}}
        @guest
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-blackC" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Benvenuto/a!
          </a>
           <ul class="dropdown-menu">
            <li><a class="dropdown-item text-blackC" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item text-blackC" href="{{route('login')}}">Login</a></li>
          </ul>
         </li>
         @endguest
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Ultimi articoli..." aria-label="Search"/>
        <button class="btnC" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</nav>