@include('association.head')

    <body>
        <!-- Page wrapper start -->
        <div class="page-wrapper">

          <!-- App header starts -->
            @include('association.header')

          <!-- App header ends -->

          <!-- Main container start -->
          <div class="main-container">

            <!-- Sidebar wrapper start -->
            @include('association.sidebar')
            <!-- Sidebar wrapper end -->

             <!-- App container starts -->
        <div class="app-container">

            <!-- App hero header starts -->
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
        {{-- @if ($adherant)
        @if ($versement)
        @if ($transaction)
        @if ($user)
        @foreach ($roles as $role)
        @if ($role === '4' && $role->id === $adherant->role_id && $role->id === $user->role_id)
  @endif
        @endforeach
        @endif
        @endif
        @endif
        @endif --}}
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
                    <h3 class="m-0">{{ $totalversement }} XAF</h3>
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
          <!-- Main container end -->

                  <!-- Main container end -->
                  <div class="row gx-3">
                    <div class="col-xxl-12">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table align-middle table-hover m-0">
                              <thead>
                                <tr>
                                  <th scope="col">Numero Transaction</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Proprietaire Compte</th>
                                  <th scope="col">Tontine</th>
                                  <th scope="col">Montant</th>
                                  <th scope="col">Jour</th>
                                </tr>
                              </thead>
                              @foreach ($transactions as $transaction)
                              {{-- @foreach ($commercial as $commerciaux) --}}
                              {{-- @if ($transaction->commercial_id === $commerciaux->id) --}}
                                  <tbody>
                                  <tr class="grd-primary-light">
                                      <td>#{{ $transaction->id }}</td>
                                      <td>{{ $transaction->type }}</td>
                                      <td>-</td>
                                      {{-- @foreach ($memb as $membr)
                                      @foreach ($soldes as $solde)

                                      @if ($solde->user_id === $membr->id)
        <td>{{ $membr->name }}</td>
                                      @endif

                                      @endforeach
                                      @endforeach --}}
                                      {{-- @foreach ($membres as $membre)
                                      @foreach ($soldes as $solde)
                                          @if ($transaction->solde_id === $solde->id && $solde->user_id === $membre->id)
                                          <td>{{ $membre->name }}</td>
                                      @endif
                                      @endforeach
                                      @endforeach --}}
                                      @foreach ($t as $tontine)
                                      @if ($tontine->id == $transaction->tontine_id)
                                          <td>{{ $tontine->name }}</td>
                                      @endif
                                      @endforeach

                                      <td>{{ $transaction->montant }} XAF</td>
                                      <td>{{ $transaction->created_at }}</td>
                                  </tr>
                                  </tbody>
                              {{-- @endif --}}

                              {{-- @endforeach --}}

                              @endforeach

                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Page wrapper end -->

   @include('association.script')
