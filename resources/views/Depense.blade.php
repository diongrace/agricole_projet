<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Depense</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

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
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center"> 
<main class="form-signin">
  <form action="{{ url('/store1') }}" method="post">
    @csrf
    <img class="mb-4" src="https://www.lavieeco.com/wp-content/uploads/2020/06/Investissement.jpg" alt="" width="300px" height="200px">
    <h1 class="h3 mb-3 fw-normal">Bienvenue Depense</h1>

    <div class="form-floating">
      <input type="Date" class="form-control" placeholder="Date" name="Date">
      <label for="floatingInput">Date</label>
    </div>

    
    <div class="form-floating">
      <input type="Vehicule" class="form-control" placeholder="Vehicule" name="Vehicule">
      <label for="floatingInput">Vehicule</label>
    </div>

    <div class="form-floating">
      <input type="Materiel" class="form-control" placeholder="Materiel" name="Materiel">
      <label for="floatingInput">Materiel</label>
    </div>

    <div class="form-floating">
      <input type="employés" class="form-control" placeholder="employés" name="employés">
      <label for="floatingInput">employés</label>
    </div>
    
    <div class="form-floating">
      <input type="Imprevue" class="form-control" placeholder="Imprevue" name="Imprevue">
      <label for="floatingInput">Imprevue</label>
    </div>

    <div class="form-floating">
      <input type="Total" class="form-control" placeholder="Total" name="Total">
      <label for="floatingInput">Total</label>
    </div>

    <div class="checkbox mb-3">
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">envoyer</button>
    
  </form>
</main>


    
  </body>
</html>