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
                <li class="breadcrumb-item" aria-current="page">Gerant</li>
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
              <h5 class="card-title">Enregistrer Gerant</h5>
            </div>
            <div class="card-body">
              <!-- Row start -->
              <form action="{{ route('admin.ajouter_gerant') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row gx-3">
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Nom du membre</label>
                        <input type="text" name="name" class="form-control" required placeholder="Enter fullname" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required placeholder="Enter email address" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="text" name="phone" class="form-control" required placeholder="Enter phone number" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Ville</label>
                        <input type="text" name="ville" class="form-control" required placeholder="Enter company name" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Pays</label>
                        <input type="text" name="pays" class="form-control" required placeholder="Enter business address" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Photo/ piece identificative</label>
                        <input type="file" name="image" class="form-control" required placeholder="Enter company name" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required placeholder="Enter company name" />
                        </div>
                        </div><br><br>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="mb-3">
                    {{-- <label class="form-label">Reglements</label> --}}
                    <input class="form-control" value="Submit" type="submit">
                    </div>
                </div>
              </form>

              <!-- Row end -->
            </div>
            <div class="card-footer">
              <div class="d-flex gap-2 justify-content-end">
                {{-- <button type="button" class="btn btn-outline-secondary">
                  Cancel
                </button> --}}
                <button type="button" class="btn btn-success">
                  Creer
                </button>
              </div>
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
