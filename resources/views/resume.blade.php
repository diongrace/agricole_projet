<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>resume</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    

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
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        {{-- <a class="link-secondary" style="color: orange" href="/Aceuil">Aceuil</a> --}}
        <a href="/Aceuil" class="btn btn-success">Aceuil</a>
      </div>
  </header>
<main class="container">
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="{{url('Depense')}}" class="btn btn-primary">Ajouter</a>
    <div class="mt-2">
      @if(session()->has("successDelete"))
      <div class="alert alert-success">
        <h3>{{session()->get('successDelete')}}</h3>
      </div>
      @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Numeros</th>
            <th scope="col">Date</th>
            <th scope="col">Vehicule</th>
            <th scope="col">Materiel</th>
            <th scope="col">employés</th>
            <th scope="col">Imprevue</th>
            <th scope="col">Total</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Utilsateurs as $Utilsateur)
          <tr>
            <th scope="row">{{($loop->index +1)}}</th>
            <td>{{$Utilsateur->Date}}</td>
            <td>{{$Utilsateur->Vehicule}}</td>
            <td>{{$Utilsateur->Materiel}}</td>
            <td>{{$Utilsateur->employés}}</td>
            <td>{{$Utilsateur->Imprevue}}</td>
            <td>{{$Utilsateur->Total}}</td>
            <td>
            <a href="{{url('Depense')}}" class="btn btn-primary">Editer</a>
            <a href="{{url('resume',$Utilsateur->id)}}" class="btn btn-danger" >Supprimer</a>
          </td>
          </tr>
          <tr>
          @endforeach
          
          </tbody>
      </table>
</main>

  </body>
</html>