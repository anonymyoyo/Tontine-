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
              <h5 class="card-title">Nouveau Commercial</h5>
            </div>
            <div class="card-body">
              <!-- Row start -->
              <form action="{{ route('ajouter.commercial') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row gx-3">
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Nom du commercial</label>
                        <input type="text" name="name" required class="form-control" placeholder="Enter fullname" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control" placeholder="Enter email address" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="text" name="phone" required class="form-control" placeholder="Enter phone number" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Ville</label>
                        <input type="text" name="ville" required class="form-control" placeholder="Enter company name" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Pays</label>
                        <input type="text" name="pays" required class="form-control" placeholder="Enter business address" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" name="image" required class="form-control" placeholder="Enter postal code" />
                        </div>
                        </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                        <label class="form-label">Agence mere</label>
                        <select name="agence_id"  class="form-select">
                            <option value="0">Select</option>
                            @foreach ($agence as $agences)
                                <option value="{{ $agences->id }}" required class="form-option">{{ $agences->name }}</option>
                            @endforeach
                            {{-- <option value="1">{{ $gerant->name }}</option> --}}
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                        <label class="form-label">Association mere</label>
                        <select name="association_id"  class="form-select">
                            <option value="0">Select</option>
                            @foreach ($association as $associations)
                                <option value="{{ $associations->id }}" required class="form-option">{{ $associations->name }}</option>
                            @endforeach
                            {{-- <option value="1">{{ $gerant->name }}</option> --}}
                        </select>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                        <label class="form-label">Zone de deploiement</label>
                        <select name="zone_id"  class="form-select">
                            <option value="0">Select</option>
                            @foreach ($zones as $zone)
                                <option value="{{ $zone->id }}" class="form-option">{{ $zone->name }}</option>
                            @endforeach
                            <option value="1">{{ $gerant->name }}</option>
                        </select>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" name="password" required class="form-control" placeholder="Enter postal code" />
                        </div>
                    </div>
                    <br><br>

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
