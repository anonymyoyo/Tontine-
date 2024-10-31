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



        <div class="card mb-3">
            <div class="card-header">
            <h5 class="card-title">Nouveau Chef d'agence</h5>
            </div>
            <div class="card-body">

            <form action="{{ route('association.ajouter.User') }}" method="post" enctype="multipart/form-data">
                        @csrf
                <!-- Row start -->
                <div class="row gx-3">
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Nom du chef d'agence</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter fullname" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                        <label class="form-label">Association</label>
                        <select name="association_id"  class="form-select">
                            <option value="0">Selectionner</option>

                            {{-- @foreach ($gerant as $gerants) --}}
                            @foreach ($association as $associations)
                                {{-- @if ($gerants->id === $associations->gerant_id) --}}
                                        <option value="{{ $associations->id }}" class="form-option">{{ $associations->name }}</option>
                                {{-- @endif --}}
                            {{-- @endforeach --}}
                            @endforeach
                            {{-- <option value="1">{{ $gerant->name }}</option> --}}
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Ville</label>
                        <input type="text" name="ville" class="form-control" placeholder="Enter company name" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Pays</label>
                        <input type="text" name="pays" class="form-control" placeholder="Enter business address" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" name="image" class="form-control" placeholder="Enter postal code" />
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter postal code" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                        {{-- <label class="form-label">Reglements</label> --}}
                        <input class="form-control" value="Submit" type="submit">
                        </div>
                    </div>
                </div>

            </form>
            <!-- Row end -->
            </div>
            {{-- <div class="card-footer">
                <div class="d-flex gap-2 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary">
                    Cancel
                    </button>
                    <button type="button" class="btn btn-success">
                    Creer
                    </button>
                </div>
            </div> --}}
        </div>

</div>
<!-- App container ends -->

</div>
<!-- Main container end -->

</div>
<!-- Page wrapper end -->
@include('../association.script')

