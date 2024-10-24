<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-association-dashboard/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:12:11 GMT -->
@include('../association.head')

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- App header starts -->
      @include('../association.header')

      <!-- App header ends -->

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        @include('../association.sidebar')
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
                  <a href="{{ route('association') }}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Chefs d'agence</li>
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

          <!-- App body starts -->
          <div class="app-body">
            <div class="ms-auto d-lg-flex d-none flex-row">
                <div class="d-flex flex-row gap-1">
                  <a href="{{ route('association.creer.chef_agence') }}" class="btn btn-primary">Creer Chef Agence</a>
                </div>
            </div><br><br>
            <!-- Row start -->
            <div class="row gx-3">
                @foreach ($responsables as $responsable)
            @foreach ($roles as $role)
            {{-- @foreach ($agences as $agence) --}}

            @if ($role->id === 2 && $responsable->role_id === $role->id)

              <div class="col-lg-4 col-sm-6 col-12">

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-column">
                      <div class="mb-3">
                        <img src="{{ Storage::url($responsable->image) }}" class="img-6x rounded-circle" alt="Image chef d'agence" />
                      </div>
                      <h5 class="mb-2">{{ $responsable->name }}</h5>
                      <h6 class="mb-3 text-secondary fw-light">{{ $role->name }}</h6>
                      <p>Working on the latest API integration.</p>
                      <div class="mb-3">
                        <span class="badge bg-opacity-10 bg-danger text-danger">{{ $role->name }}</span>
                        {{-- <span class="badge bg-opacity-10 bg-info text-info">{{ $agence->name }}</span> --}}
                      </div>
                      <div class="mt-3">
                        <span class="btn btn-success">Subscribed</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              @endif
            @endforeach
            {{-- @endforeach --}}
            @endforeach
            </div>
            <!-- Row end -->

          </div>
          <!-- App body ends -->


        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->
@include('../association.script')
