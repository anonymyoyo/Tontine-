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
    <link rel="stylesheet" href="{{ asset('dashboard/assets/fonts/bootstrap/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/main.min.css') }}" />
</head>

  <body class="login-bg">
    <!-- Container start -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
          <form method="POST" action="{{ route('login') }}" class="my-5">
                @csrf
            <div class="login-form rounded-4 p-4 mt-5">
              <a href="{{ route('home') }}" class="mb-4 d-flex">
                <img src="{{ asset('assets/images/logo.png') }}" class=" login-logo" alt="Unity Admin Dashboard" />
              </a>
              {{-- <h2 class="fw-light mb-4">Connexion</h2> --}}
              <div class="mb-3">
                <label class="form-label" for="yEmail">Votre Addresse mail</label>
                <input type="text" id="yEmail" name="email" class="form-control border-0" placeholder="Enter your email" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="pwd">Mot de Passe</label>
                <input type="password" id="pwd" name="password" class="form-control border-0" placeholder="Enter password" />
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <div class="form-check m-0">
                  <input class="form-check-input border-0" type="checkbox" value="" id="rememberPassword" />
                  <label class="form-check-label" for="rememberPassword">Se souvenir</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-white text-decoration-underline">Mot de passe oublie?</a>
              </div>
              <div class="d-grid py-3 mt-3">
                <button type="submit" class="btn btn-lg btn-primary">
                  Login
                </button>
              </div>
              <div class="text-center py-3">Se connecter avec</div>
              <div class="d-flex gap-2 justify-content-center">
                <button type="submit" class="btn btn-outline-light">
                  <i class="bi bi-google me-2"></i>Gmail
                </button>
                <button type="submit" class="btn btn-outline-light">
                  <i class="bi bi-facebook me-2"></i>Facebook
                </button>
              </div>
              {{-- <div class="text-center pt-4">
                <span>Pas encore membre?</span>
                <a href="{{ route('register') }}" class="text-white text-decoration-underline ms-2">
                  Inscrivez-vous</a>
              </div> --}}
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Container end -->
  </body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:11:53 GMT -->
</html>
