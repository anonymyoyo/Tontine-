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
                  <a href="{{ route('dashboard') }}" class="text-decoration-none">Ajouter</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Tontine</li>
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
      <h5 class="card-title">Nouvelle Tontine</h5>
    </div>
    <div class="card-body">
      <!-- Row start -->
        <form method="POST" action="{{ route('ajouter.tontine') }}"  enctype="multipart/form-data">
            @csrf
            <div class="row gx-3">
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Nom de la tontine</label>
                        <input type="text" name="name" required class="form-control" placeholder="Entrer le nom complet" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Montant minimum a Cotiser</label>
                        <input type="text" name="prix" required class="form-control" placeholder="Entrer le montant minimum des recharges" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" name="image" required class="form-control" placeholder="Telecharger une image" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" required name="description" placeholder="Description" rows="3"></textarea>
                    </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                        <label class="form-label">Reglements</label>
                        <textarea class="form-control" required name="reglement" placeholder="Reglement" rows="3"></textarea>
                        </div>
                    </div>
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

  </div>



</div>
<!-- App container ends -->

</div>
<!-- Main container end -->

</div>
<!-- Page wrapper end -->
@include('../admin.script')
