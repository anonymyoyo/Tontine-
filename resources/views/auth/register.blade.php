
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:11:53 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TCA - Inscription</title>

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
          <form method="POST" action="{{ route('register') }}" class="my-5">
                @csrf
            <div class="login-form rounded-4 p-4 mt-5">
              <a href="index.html" class="mb-4 d-flex">
                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid login-logo" alt="Earth Admin Dashboard" />
              </a>
              {{-- <h2 class="fw-light mb-4">S'inscrire</h2> --}}
              <div class="mb-3">
                <label class="form-label" for="yEmail">Votre Nom</label>
                <input type="text" name="name" required id="yEmail" class="form-control border-0" placeholder="Enter your email" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="yEmail">Votre Email</label>
                <input type="email" name="email" required id="yEmail" class="form-control border-0" placeholder="Enter your email" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="yEmail">Numer de Telephone</label>
                <input type="text" name="phone" required id="yEmail" class="form-control border-0" placeholder="Enter your email" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="yEmail">Votre Ville</label>
                <input type="text" name="ville" required id="yEmail" class="form-control border-0" placeholder="Enter your email" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="yEmail">Votre Pays</label>
                <input type="text" name="pays" required id="yEmail" class="form-control border-0" placeholder="Enter your email" />
              </div>
              <div class="mb-3">
                <label class="form-label" required for="yEmail">Piece d'identification</label>
                <input type="file" name="identification" required id="yEmail" class="form-control border-0" placeholder="Enter your email" />
              </div>
              {{-- <div class="mb-3">
                <label class="form-label" required for="yEmail">photo</label>
                <input type="file" name="image" required id="yEmail" class="form-control border-0" placeholder="Enter your email" />
              </div> --}}
              <div class="mb-3">
                <label class="form-label" for="pwd">Votre Mot de passe (Min 08 caracteres)</label>
                <input type="password" name="password" required id="pwd" class="form-control border-0" placeholder="Enter password" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="cofPwd">Confirmer Mot de Passe</label>
                <input type="password" name="password_confirmation" required id="cofPwd" class="form-control border-0" placeholder="Re-enter password" />
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <div class="form-check m-0">
                  <input class="form-check-input border-0" type="checkbox" value="" id="termsConditions" />
                  <label class="form-check-label" for="termsConditions">J'accepte les termes et conditions</label>
                </div>
              </div>
              <div class="d-grid py-3 mt-3">
                <button type="submit" class="btn btn-lg btn-primary">
                  S'inscrire
                </button>
              </div>
              <div class="text-center py-3">S'inscrire aved</div>
              <div class="d-flex gap-2 justify-content-center">
                <button type="submit" class="btn btn-outline-light">
                  <i class="bi bi-google me-2"></i>Gmail
                </button>
                <button type="submit" class="btn btn-outline-light">
                  <i class="bi bi-facebook me-2"></i>Facebook
                </button>
              </div>
              <div class="text-center pt-4">
                <span>Vous avez deja un compte?</span>
                <a href="{{ route('login') }}" class="text-white text-decoration-underline ms-2">
                  Connectez-vous</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Container end -->
  </body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:12:35 GMT -->
</html>
