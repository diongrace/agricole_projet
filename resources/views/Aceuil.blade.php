
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Aceuil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    

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

body {
  background-color: 
}
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
        }]
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/navbar-top-fixed.css')}}" rel="stylesheet">
  </head>
  
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <header>
    <div>
      <img src="https://ci5.googleusercontent.com/proxy/tWyH7p69aSQQk1_VJVBkkqLA8zb2zECwpg8oziVeo12NfzeyiyChmZvjoVjbSGDnc_qrmimRNVmAqaC7UbiI_-UZSgCjH2HFMpyDbpWCdnEtX_7r0fXwOIT2TTgbfjQpKfUs8IHnBqVa_SeYgrGM9tVkVNe5PPuDTtz7HdpVBCYr0AeAuNKAQpRfl5BTGG9gChQSdGEGLx1luNEB8r2W0Yhh7Q=s0-d-e1-ft#https://dynamic.brandcrowd.com/preview/logodraft/cf43a71f-1f39-4a43-b4c3-4229d7465b7e/image/large.png?bust=e25a1b33-1cd3-4f54-ba0a-6392b08cf371" alt="" width="129px" height="113px">
    </div>
    
    </header>
 <div class="container-fluid">
    <a class="navbar-brand" href="#">BIENVENUE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="" style="color:white"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('information')}}"  style="color: white">liste des membres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('resume')}}"  style="color: white">Depense</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('bilan')}}"  style="color:white">Subvention</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="/Actualite"  style="color:whitesmoke">Actualite</a>
        </li>
       
       
      </ul>
     
    </div>
  </div> 
  {{-- <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
      clic button
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
      {{-- <li><a class="dropdown-item active" href="/Actualite">Actualite</a></li> --}}
      {{-- <li><a class="dropdown-item" href="/inscription">inscrption</a></li>
      <li><a class="dropdown-item" href="/Depense">Depense</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/Subvention">Subvention</a></li>
    </ul>
  </div> --}} --}}
</nav>

<main class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://comment.ma/data/img/5e6bbe0b43449.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="https://www.alburolaw.com/wp-content/uploads/2021/01/cooperative-soc-n-coop-employee.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="http://www.socabeg.sn/IMG/arton33.jpg" class="d-block w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 
</main>


    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>