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
                  <a href="index.html" class="text-decoration-none">Ajouter</a>
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


          <div class="card mb-3">
            <div class="card-header">
              <h5 class="card-title">Nouvelle agence</h5>
            </div>
            <div class="card-body">
              <!-- Row start -->
              <form action="{{ route('edit.edit_agence', $agence->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row gx-3">
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Nom de l'agence</label>
                        <input type="text" name="name" value="{{ $agence->name }}" class="form-control" placeholder="Enter fullname" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                        <label class="form-label">Chef d'agence</label>
                        <select name="user_id"  class="form-select">
                            <option value="0">Select</option>
                            @foreach ($gerant as $gerants)
                                <option value="{{ $gerants->id }}" class="form-option">{{ $gerants->name }}</option>
                            @endforeach
                            {{-- <option value="1">{{ $gerant->name }}</option> --}}
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $agence->email }}" class="form-control" placeholder="Enter email address" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="text" name="phone" value="{{ $agence->phone }}" class="form-control" placeholder="Enter phone number" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Ville</label>
                        <input type="text" name="ville" value="{{ $agence->ville }}" class="form-control" placeholder="Enter company name" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Pays</label>
                        <input type="text" name="pays" value="{{ $agence->pays }}" class="form-control" placeholder="Enter business address" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Capital de l'agence</label>
                        <input type="text" name="budget" value="{{ $agence->budget }}" class="form-control" placeholder="Enter province/territory" />
                    </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Piece de legalite</label>
                        <input type="file" name="identification" value="{{ $agence->identification }}" class="form-control" placeholder="Enter postal code" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Image de l'agence</label>
                        <input type="file" name="image" class="form-control" placeholder="Enter company name" />
                    </div>
                    </div><br><br>

                </div>
                <div class="col-sm-6 col-12">
                    <div class="mb-3">
                    {{-- <label class="form-label">Reglements</label> --}}
                    <input class="form-control" value="Mise A Jour" type="submit">
                    </div>
                </div>
              </form>

              <!-- Row end -->
            </div>
          </div>


          <!-- App footer start -->
          {{-- @include('../admin.footer') --}}
          <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->
@include('../admin.script')
