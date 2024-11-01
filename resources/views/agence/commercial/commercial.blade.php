<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-agence-dashboard/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:12:11 GMT -->
@include('../agence.head')

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- App header starts -->
      @include('../agence.header')

      <!-- App header ends -->

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        @include('agence/sidebar')
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
                  <a href="{{ route('agence') }}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Commerciaux</li>
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
          <div class="col-xxl-12">
            <div class="ms-auto d-lg-flex d-none flex-row">
                <div class="d-flex flex-row gap-1">
                  <a href="{{ route('agence.creer.commercial') }}" class="btn btn-primary">Creer un Commercial</a>
                </div>
            </div><br>
            <div class="card mb-3">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>ID Commercial</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Zone de deploiement</th>
                        <th>Agence mere</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($commercial as $commerciaux)

                        {{-- @foreach ($roles as $role) --}}


                            <tr class="grd-primary-light">
                                <td>{{ $commerciaux->id }}</td>
                                <td><a href="#" class="text-red"><div class="mb-3">
                                    <img src="{{ Storage::url($commerciaux->image) }}" class="img-6x rounded-circle" alt="Image Commercial" />
                                  </div>{{ $commerciaux->name }}</a></td>
                                <td>{{ $commerciaux->email }}</td>
                                <td>{{ $commerciaux->phone }}</td>
                              @foreach ($zones as $zone)
                                @if ($commerciaux->id === $zone->user_id)
                                    <td>{{ $zone->name }}</td>
                                @endif
                              @endforeach

                              @foreach ($agence as $agences)
                                    <td>{{ $agences->name }}</td>
                              @endforeach

                            </tr>



                        @endforeach
                        {{-- @endforeach --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->
@include('../agence.script')
