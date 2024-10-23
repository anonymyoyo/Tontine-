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
                  <a href="index.html" class="text-decoration-none">Dashboard</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Agences</li>
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
                  <a href="{{ route('creer.agence') }}" class="btn btn-primary">Creer une Agence</a>
                </div>
                <div class="d-flex flex-row gap-1">
                    <a href="{{ route('creer.tontine') }}" class="btn btn-primary">Creer une Tontine</a>
                  </div>
            </div>
              <br>
            <!-- Row start -->
            <div class="row gx-3">
              <div class="col-xxl-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table align-middle table-hover m-0">
                        <thead>
                          <tr>
                            <th scope="col">Nom de l'agence</th>
                            <th scope="col">Chef d'agence</th>
                            <th scope="col">email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Nbre Commerciaux</th>
                            <th scope="col">Date creation</th>
                            <th scope="col">Nbre Membre</th>
                            <th scope="col">Association mere</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        @foreach ($agences as $agence)
                            <tbody>
                            <tr class="grd-primary-light">
                                <th scope="row">
                                    <a href="{{ route('agence.detail', $agence->id) }}"></a>
                                <img class="rounded-circle img-3x me-2" src="{{ Storage::url($agence->image) }}"
                                    alt="Bootstrap Gallery" />{{ $agence->name }}
                                </th>

                                @foreach ($gerant as $gerants)
                                    @if ($agence->chef_d_agence_id === $gerants->id)
                                    <td>{{ $gerants->name }}</td>
                                @endif
                                @endforeach
                                    <td>{{ $agence->email }}</td>

                                <td>{{ $agence->ville }}, {{ $agence->pays }}</td>
                                <td>#</td>
                                <td>{{ $agence->created_at }}</td>
                                <td>
                                <div class="progress small">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                </td>
                                @foreach ($association as $associations)
                                   @if ($agence->association_id===$associations->id)
                                       <td>{{ $associations->name }}</td>
                                   @endif
                                @endforeach

                                <td>
                                {{-- <a class="btn btn-info btn-sm" href="#"><i class="bi bi-pencil"></i>
                                </a> Page detail pas necessaire pour le moment --}}
                                {{-- <li> --}}
                                    <a class="btn btn-info btn-sm" href="{{ route('edit.admin_agence', $agence->id) }}"><i class="bi bi-pencil"></i>
                                    </a>
                                    <form method="POST" action="{{ route('delete.admin_agence', $agence->id) }}" id="delete">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <a  class="btn btn-danger btn-icon btn-sm mb-1" onclick="event.preventDefault();
                                    document.getElementById('delete').submit()"><i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

          </div>
          <!-- App body ends -->

          <!-- App footer start -->
          @include('../admin.footer')
          <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->
@include('../admin.script')
