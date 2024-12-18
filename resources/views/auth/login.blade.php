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
    {{-- @include('users.header') --}}<div class="retour_arriere">
                <a href="{{ route('user') }}"><img src="{{ asset('assets/css/img/forme18.png') }}" class="retourarriere" alt=""></a>
            </div>
    <div class="login-header">
        <div class="login-navbar burger">
            
        <div class="logo">
          <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo-1"></a>
        </div>
        
        <div class="login-r"></div>
        
          <nav> 
            <ul>
              <li>Vous n'etes pas encore membre ? <a href="{{ route('contact') }}">Contactez-nous</a> </li>
            </ul>
          </nav>
        </div>
        
    </div>
    <br><br><br><br>
    <div class="container login-form">
        
        <div class="formulaire">
            <h1 class="h3">Vous n'etes pas encore membre ? <a href="{{ route('contact') }}">Contactez-nous</a> </h1>
          <h2 class="h2">Connexion</h2>
          <form method="POST" action="{{ route('login') }}">
          @csrf
            <div class="li">
              <label class="li-1" for="numero">Addresse Mail:</label>
            </div>
            <div class="li">
              <input class="li-2" required type="mail" name="email" id="phone"
                placeholder="Veuiller entrer votre numero de telephone"><br><br>
            </div>
            <div class="li">
              <label class="li-1" for="mdp">Mot de Passe:</label>
            </div>
            <div class="li">
              <input class="li-2" required type="password" name="password" id="password"><br><br>
            </div>
            <div class="li">
              <input class="li-3" type="submit" value="Connexion">
            </div>
            
          </form>
          
        </div>
        <div class="image2">
                <h1 class="h3">Debloquez le potentiel de gerer vos tontine de n'importe ou.</h1>
              <img src="{{ asset('assets/css/img/wallet.png') }}" alt="image">
            </div>
    </div>
  </body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:11:53 GMT -->
</html>
