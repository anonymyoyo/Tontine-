<div class="app-container">

    <!-- App hero header starts -->
    <div class="app-hero-header mb-4">

      <!-- Breadcrumb and Stats start -->
      <div class="d-flex align-items-center mb-3">

        <!-- Breadcrumb start -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <i class="bi bi-house lh-1"></i>
            <a href="index.html" class="text-decoration-none">Home</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Dashboard</li>
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

      <!-- Row start -->
      <div class="row gx-3">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="bg-transparent-light rounded-1 mb-3 position-relative">
            <div class="p-3 text-white">
              <div class="mb-2">
                <i class="fs-3 bi bi-people"></i>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="m-0 fw-normal">Total compte</h5>
                <h3 class="m-0">{{ $d }}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="bg-transparent-light rounded-1 mb-3 position-relative">
            <div class="p-3 text-white">
                <div class="arrow-label">+18%</div>
              <div class="mb-2">
                <i class="bi bi-bag-check fs-1 lh-1"></i>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="m-0 fw-normal">Versements</h5>
                {{-- @foreach ($totalversement as $versement)
                    @if ($versement->type === 'depot')
                        {{ $versement->sum('montant') }}
                    @endif
                @endforeach --}}
                <h3 class="m-0">750.000 XAF</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="bg-transparent-light rounded-1 mb-3 position-relative">
            <div class="p-3 text-white">
              <div class="mb-2">
                <i class="fs-3 bi bi-arrow-left-right"></i>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="m-0 fw-normal">Transactions</h5>
                <h3 class="m-0">{{ $total }} XAF</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="bg-transparent-light rounded-1 mb-3 position-relative">
            <div class="p-3 text-white">
              <div class="arrow-label">+24%</div>
              <div class="mb-2">
                <i class="bi bi-bell fs-1 lh-1"></i>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="m-0 fw-normal">Adhesions</h5>
                <h3 class="m-0">{{ $totalcompte }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- App Hero header ends -->
    <!-- App body starts -->
    <div class="app-body">
      <!-- Row start -->
      <div class="row gx-3">
        <div class="col-xl-8 col-sm-12 col-12">
          <div class="card mb-3">
            <div class="card-body height-230">
              <div class="row align-items-end">
                <div class="col-sm-8">
                  <h3 class="mb-4">Congratulations {{ auth()->user()->name }} 🎉</h3>
                  <p>
                    You have sold
                    <span class="text-success fw-bold">65%</span> more
                    products than last year.
                  </p>
                  <div class="mt-4 d-flex flex-wrap gap-3">
                    <div class="d-flex align-items-center">
                      <div class="icon-box lg grd-info-light rounded-5 me-3">
                        <i class="bi bi-bag text-info fs-3"></i>
                      </div>
                      <div class="m-0">
                        <h3 class="m-0 fw-semibold">$4800</h3>
                        <p class="m-0 text-secondary">This Year</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="icon-box lg grd-danger-light rounded-5 me-3">
                        <i class="bi bi-bag text-danger fs-3"></i>
                      </div>
                      <div class="m-0">
                        <h3 class="m-0 fw-semibold">$2300</h3>
                        <p class="m-0 text-secondary">Last Year</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <img src="{{ asset('dashboard/assets/images/sales.svg') }}" class="congrats-img" alt="Bootstrap Gallery" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-12 col-12">
          <div class="card mb-3 grd-primary">
            <div class="card-body bg-hexagon height-230">
              <h5 class="card-title text-white">Overall Sales</h5>
              <div id="sales"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->

      <!-- Row start -->
      <div class="row gx-3">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="card-title">Revenue</h5>
            </div>
            <div class="card-body">
              <div id="revenue"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->

      <!-- Row start -->
      <div class="row gx-3">
        <div class="col-xl-8 col-12">
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="card-title">Real Time</h5>
            </div>
            <div class="card-body">
              <div id="world-map-markers3" class="chart-height-lg position-relative"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-12">
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="card-title">Source / Medium</h5>
            </div>
            <div class="card-body">
              <div id="sourceMedium" class="auto-align-graph"></div>
              <div class="text-center">
                <h2 class="fw-semibold m-0">
                  890
                  <i class="bi bi-arrow-up-right-circle-fill text-success ms-1"></i>
                </h2>
                <p class="text-truncate">7% higher than last year.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->

    </div>
    <!-- App body ends -->

    <!-- App footer start -->
    @include('agence.footer')
    <!-- App footer end -->

  </div>
