<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:11:53 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TCA - Connexion</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />

    <!-- *************
			************ CSS Files *************
		************* -->
    {{-- <link rel="stylesheet" href="{{ asset('dashboard/assets/fonts/bootstrap/bootstrap-icons.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('dashboard/assets/css/main.min.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    {{-- <link rel="stylesheet" href="" /> --}}
</head>

  <body class="login-bg">

    <div class="login-header">
        <div class="logo">
          <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo-1"></a>
        </div>
        <div class="login-r"></div>
        <div class="login-navbar burger">
          <nav>
            <ul>
              <li>Vous n'etes pas encore membre ? <a href="{{ route('contact') }}">Contactez-nous</a> </li>
            </ul>
          </nav>
        </div>
      </div>

    <div class="container login-form">
        <div class="conversation">
            <h3 class="droite">Bonjour j'ai une question</h3>
            <h3 class="gauche">Oui bonjour je vous ecoute</h3>
            <h3 class="droite">Comment creer un compte ou bien comment s'inscrire sur votre appli?</h3>
            <h3 class="gauche">Merci pour la question :)</h3>
            <h3 class="gauche">Justement pour vous inscrire rendez-vous sur la page contact, remplissez le formulaire et nous revenons vers vous apres 3mins</h3>
        </div>
        <div class="img2">
          <img src="{{ asset('assets/css/img/register.png') }}" alt="image">
        </div>
      </div>
  </body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:11:53 GMT -->
</html>
