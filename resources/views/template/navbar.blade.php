@section('logo')
    <img src={{ asset('img/fatsmoke-logo.png') }} class="mx-auto d-block animated fadeIn"
    />
@endsection

@section('navbar')
<nav class="navbar  navbar-expand-lg navbar-dark bg-custom  animated fadeIn delay-1s">
        <a class="navbar-brand" href="#">FAT SMOKE RIBS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Locations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feedback</a>
            </li>
          </ul>
        </div>
      </nav>    
{{-- <hr class="animated fadeIn delay-1s"> --}}
      @endsection