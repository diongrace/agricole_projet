<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>information</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/offcanvas-navbar/">

    

    <!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="background-color: yellowgreen">Encore Bienvenue</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="background-color: orangered" href="/Aceuil">Aceuil</a>
        </li>
       
    </div>
  </div>
</nav>

<main class="container">

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">BRAVO VOUS ETES BIEN ENREGISTRER</h3>
    <a href="{{url('inscription')}}" class="btn btn-primary">Ajouter</a>
    <div class="mt-2">
      @if(session()->has("successDelete"))
      <div class="alert alert-success">
        <h3>{{session()->get('successDelete')}}</h3>
      </div>
      @endif
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Numeros</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Contact</th>
            <th scope="col">Genre</th>
            <th scope="col">Specialite</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($menbres as $menbre)
          <tr>
            <th scope="row">{{($loop->index +1)}}</th>
            <td>{{$menbre->Nom}}</td>
            <td>{{$menbre->Prenom}}</td>
            <td>{{$menbre->Contact}}</td>
            <td>{{$menbre->Genre}}</td>
            <td>{{$menbre->Specialite}}</td>
            <td>
              <a href="{{url('inscription')}}" class="btn btn-primary">Editer</a>
              <a href="{{url('information',$menbre->id)}}" class="btn btn-danger" >Supprimer</a>
              {{-- <form id="form-{{$information->id}}" action="" method="post">
                 @csrf
                 <input type="hidden" name="_method" value="delete">
              </form> --}}
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </div>

</main>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="{{asset('js/offcanvas.js')}}"></script>
  </body>
</html>