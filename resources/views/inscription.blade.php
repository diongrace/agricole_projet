<!DOCTYPE html>
<html lang="en">
<head>
<title>inscription</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
 <form action="{{ url('/store') }}" method="post">
 @csrf
<div class="container-login100">
<div class="wrap-login100">
<form class="login100-form validate-form">
<span class="login100-form-title p-b-26">
BIENVENUE
</span>
<span class="login100-form-title p-b-48">
<i class="zmdi zmdi-font"></i>
</span>
<div class="wrap-input100 validate-input" data-validate="">
<input class="input100" type="Nom" name="Nom">
<span class="focus-input100" data-placeholder="Nom"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="">
<span class="btn-show-pass">
<i class="zmdi zmdi-eye"></i>
</span>
<div class="wrap-input100 validate-input" data-validate="">
<input class="input100" type="Prenom" name="Prenom">
<span class="focus-input100" data-placeholder="Prenom"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="">
<span class="btn-show-pass">
<i class="zmdi zmdi-eye"></i>
</span>
<input class="input100" type="Contact" name="Contact">
<span class="focus-input100" data-placeholder="Contact"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="">
<span class="btn-show-pass">
<i class="zmdi zmdi-eye"></i>
</span>
<input class="input100" type="Genre" name="Genre">
<span class="focus-input100" data-placeholder="Genre"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="">
<span class="btn-show-pass">
<i class="zmdi zmdi-eye"></i>
</span>
<input class="input100" type="Specialite" name="Specialite">
<span class="focus-input100" data-placeholder="Specialite"></span>
</div>
<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">
<div class="login100-form-bgbtn"></div>
<button class="login100-form-btn">
envoyer
</button>
</div>
</div>
<div class="text-center p-t-115">
<span class="txt1">

</span>

</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="{{asset('js/main.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	//   window.dataLayer = window.dataLayer || [];
	//   function gtag(){dataLayer.push(arguments);}
	//   gtag('js', new Date());

	//   gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a43150127f1f3e7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a431500cc31f3e7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
</body>
</html>