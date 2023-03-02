<nav class="navbar navbar-expand-lg bg-dark separate ">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('homepage')}}"><i class="bi bi-boombox"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-2">
            <a class="nav-link button active  text-white" aria-current="page" href="{{route('chi-sono')}}">Chi sono</i></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link button  text-white" href="">Contact me</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item  text-white" href="#">Action</a></li>
              <li><a class="dropdown-item  text-white" href="#">Another action</a></li>
              <li><a class="dropdown-item  text-white" href="#">Something else here</a></li>
            </ul>
          </li> --}}
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn button  text-white" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>