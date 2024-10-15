<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:12:11 GMT -->
@include('../admin.head')

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- App header starts -->
      @include('../admin.header')

      <!-- App header ends -->

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        @include('../admin.sidebar')
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
                  <a href="{{ route('dashboard') }}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Association</li>
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
        <!-- App body ends -->

        <!-- App body starts -->
        @foreach ($association as $associations)
            <div class="app-body">

                <!-- Row start -->
                <div class="row justify-content-center">
                <div class="col-xxl-12">
                    <div class="card mb-3 bg-primary">
                    <div class="card-body bg-hexagon">
                        <!-- Row start -->
                        <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="assets/images/user5.png" class="img-5xx rounded-circle" alt="Bootstrap Gallery" />
                        </div>
                        <div class="col">
                            <h6 class="text-white">{{ $associations->name }}</h6>
                            @foreach ($gerant as $gerants)
                                @if ($associations->gerant_id === $gerants->id)
                                    <h4 class="m-0 text-white">{{ $gerants->name }}</h4>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="#!" class="btn btn-light btn-lg"> Follow</a>
                        </div>
                        </div>
                        <!-- Row end -->
                    </div>
                    </div>
                </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row gx-3">
                <div class="col-xxl-3 col-sm-6 col-12 order-xxl-1 order-xl-2 order-lg-2 order-md-2 order-sm-2">
                    <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">A propos</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3">
                        <i class="bi bi-house fs-2 me-2"></i> Localisation
                        <span> San Fransisco</span>
                        </h6>
                        <h6 class="d-flex align-items-center mb-3">
                        <i class="bi bi-building fs-2 me-2"></i> Works @
                        <span class="text-primary">Bootstrap Gallery</span>
                        </h6>
                        <h6 class="d-flex align-items-center mb-3">
                        <i class="bi bi-globe-americas fs-2 me-2"></i>
                        <span class="text-primary">www.bootstrap.gallery</span>
                        </h6>
                    </div>
                    </div>
                    <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Agences</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-inline-flex gap-2 flex-wrap">
                        <span class="badge bg-danger">HTML</span>
                        <span class="badge bg-info">Javascript</span>
                        <span class="badge bg-success">React</span>
                        <span class="badge bg-warning">Scss</span>
                        <span class="badge bg-primary">Angular</span>
                        <span class="badge bg-secondary">CSS</span>
                        </div>
                    </div>
                    </div>
                    <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Transactions</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales"></div>
                        <div class="text-center my-4">
                        <h1 class="fw-bold">
                            865
                            <i class="bi bi-arrow-up-right-circle-fill text-success"></i>
                        </h1>
                        <p class="fw-light m-0">21% higher than last month</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-sm-12 col-12 order-xxl-2 order-xl-1 order-lg-1 order-md-1 order-sm-1">
                    <div class="card mb-3">
                    <div class="card-img">
                        <img src="assets/images/flowers/img1.jpg" class="card-img-top img-fluid"
                        alt="Bootstrap Dashboards" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-title mb-3">Description</h4>
                        <p class="mb-3">
                        {{ $associations->description}}.
                        </p>
                        {{-- <div class="d-flex align-items-center">
                        <img src="assets/images/user.png" class="rounded-circle me-3 img-4x" alt="Bootstrap Admin" />
                        <h6 class="m-0">Ilyana Maesi</h6>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                        {{-- <img src="assets/images/user5.png" class="rounded-circle me-3 img-4x" alt="Bootstrap Themes" /> --}}
                        <div class="flex-grow-1">
                            <h4 class="card-title mb-3">Reglement</h4>
                            <p class="text-muted">{{ $associations->created_at }}</p>
                            <p>
                                {{ $associations->reglement}}.
                            </p>
                            <div class="row gx-3">
                            <div class="col-12">
                                <p class="fw-bold">Media Files (3)</p>
                            </div>
                            <div class="col-4">
                                <img src="assets/images/flowers/img3.jpg" alt="Bootstrap Gallery"
                                class="img-fluid rounded" />
                            </div>
                            <div class="col-4">
                                <img src="assets/images/flowers/img5.jpg" alt="Bootstrap Gallery"
                                class="img-fluid rounded" />
                            </div>
                            <div class="col-4">
                                <img src="assets/images/flowers/img3.jpg" alt="Bootstrap Gallery"
                                class="img-fluid rounded" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12 order-xxl-3 order-xl-3 order-lg-3 order-md-3 order-sm-3">
                    <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                        <span>Nombre de membre</span>
                        <span class="text-primary">75%</span>
                        </div>
                        <div class="progress small">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title">Commerciaux</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-2 row-cols-3">
                            <div class="col">
                                <img src="{{ asset('dashboard/assets/images/user.png')}}" class="img-fluid rounded-2" alt="Bootstrap Themes" />
                            </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title">Activites</h5>
                        </div>
                        <div class="card-body">
                            <div class="scroll350">
                            <div class="my-2">
                                <div class="activity-block d-flex position-relative">
                                <img src="assets/images/user2.png" class="img-5x me-3 rounded-circle activity-user"
                                    alt="Admin Dashboard" />
                                <div class="mb-3">
                                    <h5>Sophie Michiels</h5>
                                    <p class="m-0">3 day ago</p>
                                    <p>Paid invoice ref. #26788</p>
                                    <span class="badge bg-info">Sent</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Row end -->

            </div>
            <!-- App body ends -->

            </div>
      <!-- App container ends -->
        @endforeach
    </div>
    <!-- Main container end -->

  </div>
  <!-- Page wrapper end -->
@include('../admin.script')
