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
        @include('../agence.sidebar')
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
                <li class="breadcrumb-item" aria-current="page">Membres</li>
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

          <div class="row gx-3">
            <div class="ms-auto d-lg-flex d-none flex-row">
                <div class="d-flex flex-row gap-1">
                  <a href="{{ route('agence.creer_membres') }}" class="btn btn-primary">Ajouter Membre</a>
                </div>
            </div>
            <div class="col-xxl-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped m-0">
                        <thead>
                          <tr>
                            <th>ID Client</th>
                            <th>Nom Client</th>
                            <th>Ville</th>
                            <th>Pays</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Tontine</th>
                            <th>Solde</th>
                          </tr>
                        </thead>
                        @foreach ($membre as $user)
                            <tbody>
                                <tr>
                                    <td>#{{ $user->id }}</td>
                                    <td><a href="#" class="text-red"><div class="mb-3">
                                        <img src="{{ Storage::url($user->image) }}" class="img-6x rounded-circle" alt="Image Commercial" />
                                    </div>{{ $user->name }}</a></td>
                                    <td>{{ $user->ville }}</td>
                                    <td>{{ $user->pays }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    @foreach ($t as $ts)
                                    @if ($ts->id == $user->mem_tontine_id)
                                        <td>{{ $ts->name }}</td>
                                    @endif
                                    @endforeach
                                    @foreach ($sold as $solde)
                                    @if ($solde->user_id == $user->id)
                                        <td>{{ $solde->solde }} XAF</td>
                                        @endif
                                    @endforeach
                                </tr>
                            </tbody>
                        @endforeach

                      </table>
                    </div>
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
