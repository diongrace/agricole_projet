<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Subvention</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer/">

    

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
    <link href="{{asset('css/sticky-footer.css')}}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
<!-- Begin page content -->
<main class="flex-shrink-0">
  <form action="{{ url('/store3') }}" method="post">
    @csrf
    <section class="vh-100" style="background-color: orange;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">
      
              <h1 class="text-white mb-4">Subvention Bienvenue</h1>
      
              <div class="card" style="border-radius: 15px;">
                <div class="card-body">
      
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Date</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input type="Date" class="form-control form-control-lg" placeholder="Date" name="Date"/>
      
                    </div>
                  </div>

                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Montant</h6>
      
                    </div>

                    

                    <div class="col-md-9 pe-5">
      
                      <input type="Montant" class="form-control form-control-lg" placeholder="saisir" id="Montant" name="Montant" />
      
                    </div>
                  </div>

                  <hr class="mx-n3">

                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">donateur</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input type="donateur" class="form-control form-control-lg" placeholder="saisir" id="donateur" name="donateur"/>
      
                    </div>
                  </div>

                  <hr class="mx-n3">
                  
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">cooperative</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input type="cooperative" class="form-control form-control-lg" placeholder="saisir" id="" name="cooperative" />
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Motif</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <textarea class="form-control" rows="3" placeholder="entrer" id="Motif" name="Motif"></textarea>
      
                    </div>
                  </div>
      
      
                  <hr class="mx-n3">
      
                  <div class="px-5 py-4">
                    <button type="submit" class="btn btn-primary btn-lg">envoyer</button>
                    {{-- <input href="{{url('bilan')}}" type="submit"  class="btn btn-warning btn-lg" value="Liste"> --}}
                  </div>
      
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section>
  </form>
</main>


</footer>


    
  </body>
</html>