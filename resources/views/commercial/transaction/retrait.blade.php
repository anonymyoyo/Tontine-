<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-commercial-dashboard/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:12:11 GMT -->
@include('../commercial.head')

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- App header starts -->
      @include('../commercial.header')

      <!-- App header ends -->

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        @include('../commercial.sidebar')
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App hero header starts -->
          <div class="app-hero-header mb-4">

            <!-- Breadcrumb and Stats start -->
            <div class="d-flex align-items-center mb-3">

              <!-- Breadcrumb start -->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <i class="bi bi-house lh-1"></i>
                  <a href="index.html" class="text-decoration-none">Ajouter</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Client</li>
              </ol>
              <!-- Breadcrumb end -->

              <!-- Sales stats start -->
              <div class="ms-auto d-lg-flex d-none flex-row">
                <div class="d-flex flex-row gap-1">
                  <button class="btn btn-sm btn-dark">Today</button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    7 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    15 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    30 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    90 Days
                  </button>
                </div>
              </div>

              <!-- Sales stats end -->

            </div>
            <!-- Breadcrumb and stats end -->

          </div>
          <!-- App Hero header ends -->

<div id="retrait-token" class="white-popup mfp-hide">
    <div class="submit-token-details">
        <h5>RETRAIT</h5>
        <div class="text-center submit-token-content">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Bitcoin">
            {{-- <div class="submit-time"> --}}
                <label class="primary text-center">Tontine</label>
                <select class="form-control text-center">
                    <option value="">Selectionner Tontine</option>
                    {{-- @foreach($tontin as $tontines)
                        <option value="{{ $tontines->id }}">{{ $tontines->name }}</option>
                    @endforeach --}}
                </select>
            {{-- </div> --}}
            <div class="submit-time">
                <p class="primary text-center">Montant a deposer</p>

                <h6  class="text-center">436429297 XAF</h6>
            </div>
            {{-- <p class="tertiary text-center">Ticket de la Transaction : <span class="tertiary">3.99</span> XAF</p> --}}
            <p class="secondary text-center">Merci de bien vouloir choisir votre operateur/banque</p>
        </div>
        <a href="javascript:void(0)" class="primary-btn primary-effect"><img src="{{ asset('assets/images/Momo.png') }}" alt=""></a>
    </div>
</div>



</div>
<!-- App container ends -->

</div>
<!-- Main container end -->

</div>
<!-- Page wrapper end -->
@include('../commercial.script')
