<div class="app-header d-flex align-items-center">

    <!-- Toggle buttons start -->
    <div class="d-flex col">
      <button class="toggle-sidebar" id="toggle-sidebar">
        <i class="bi bi-list lh-1 text-white"></i>
      </button>
      <button class="pin-sidebar" id="pin-sidebar">
        <i class="bi bi-list lh-1 text-white"></i>
      </button>
    </div>
    <!-- Toggle buttons end -->

    <!-- App brand starts -->
    <div class="app-brand py-2 col">
      <a href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/images/logo.png') }}" class="logo" alt="Bootstrap Gallery" />
      </a>
    </div>
    <!-- App brand ends -->

    <!-- App header actions start -->
    <div class="header-actions col">
      <div class="d-lg-flex d-none align-items-center gap-2">
        <div class="dropdown">
          <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-grid fs-5 lh-1 text-white"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end shadow-lg">
            <!-- Row start -->
            <div class="d-flex gap-2 m-2">
              <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                <img src="assets/images/brand-behance.svg" class="img-3x" alt="Admin Themes" />
              </a>
              <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                <img src="assets/images/brand-gmail.svg" class="img-3x" alt="Admin Themes" />
              </a>
              <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                <img src="assets/images/brand-google.svg" class="img-3x" alt="Admin Themes" />
              </a>
              <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                <img src="assets/images/brand-bitcoin.svg" class="img-3x" alt="Admin Themes" />
              </a>
              <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                <img src="assets/images/brand-dribbble.svg" class="img-3x" alt="Admin Themes" />
              </a>
            </div>
            <!-- Row end -->
          </div>
        </div>
        <div class="dropdown">
          <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-exclamation-triangle fs-5 lh-1 text-white"></i>
            <span class="count-label">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-end shadow-lg">
            <h5 class="fw-semibold px-3 py-2 text-primary">
              Notifications
            </h5>
            <div class="dropdown-item">
              <div class="d-flex py-2 border-bottom">
                <div class="icon-box md bg-success rounded-circle me-3">
                  <i class="bi bi-exclamation-triangle text-white fs-4"></i>
                </div>
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Rosalie Deleon</h6>
                  <p class="mb-1 text-secondary">You have new order.</p>
                  <p class="small m-0 text-secondary">30 mins ago</p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="d-flex py-2 border-bottom">
                <div class="icon-box md bg-danger rounded-circle me-3">
                  <i class="bi bi-exclamation-octagon text-white fs-4"></i>
                </div>
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Donovan Stuart</h6>
                  <p class="mb-2">Membership has been expired.</p>
                  <p class="small m-0 text-secondary">2 days ago</p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="d-flex py-2">
                <div class="icon-box md bg-warning rounded-circle me-3">
                  <i class="bi bi-exclamation-square text-white fs-4"></i>
                </div>
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Roscoe Richards</h6>
                  <p class="mb-2">Payment pending. Pay now.</p>
                  <p class="small m-0 text-secondary">3 days ago</p>
                </div>
              </div>
            </div>
            <div class="d-grid mx-3 my-1">
              <a href="javascript:void(0)" class="btn btn-info">View all</a>
            </div>
          </div>
        </div>
        <div class="dropdown">
          <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-bell fs-5 lh-1 text-white"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end shadow-lg">
            <h5 class="fw-semibold px-3 py-2 text-primary">Updates</h5>
            <div class="dropdown-item">
              <div class="d-flex py-2 border-bottom">
                <div class="icon-box md border border-success grd-success-light rounded-circle me-3">
                  <span class="text-success">DS</span>
                </div>
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Douglass Shaw</h6>
                  <p class="mb-1 text-secondary">
                    Membership has been ended.
                  </p>
                  <p class="small m-0 text-secondary">Today, 07:30pm</p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="d-flex py-2 border-bottom">
                <div class="icon-box md border border-danger grd-danger-light rounded-circle me-3">
                  <span class="text-danger">WG</span>
                </div>
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Willie Garrison</h6>
                  <p class="mb-1 text-secondary">
                    Congratulate, James for new job.
                  </p>
                  <p class="small m-0 text-secondary">Today, 08:00pm</p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="d-flex py-2">
                <div class="icon-box md border border-warning grd-warning-light rounded-circle me-3">
                  <span class="text-warning">TJ</span>
                </div>
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Terry Jenkins</h6>
                  <p class="mb-1 text-secondary">
                    Lewis added new schedule release.
                  </p>
                  <p class="small m-0 text-secondary">Today, 09:30pm</p>
                </div>
              </div>
            </div>
            <div class="d-grid mx-3 my-1">
              <a href="javascript:void(0)" class="btn btn-info">View all</a>
            </div>
          </div>
        </div>
        <div class="dropdown">
          <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-envelope-open fs-5 lh-1 text-white"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end shadow-lg">
            <h5 class="fw-semibold px-3 py-2 text-primary">Messages</h5>
            <div class="dropdown-item">
              <div class="d-flex py-2 border-bottom">
                <img src="{{ asset('dashboard/assets/images/user3.png')}}" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Angelia Payne</h6>
                  <p class="mb-1 text-secondary">
                    Membership has been ended.
                  </p>
                  <p class="small m-0 text-secondary">Today, 07:30pm</p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="d-flex py-2 border-bottom">
                <img src="{{ asset('dasboard/assets/images/user1.png') }}" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Clyde Fowler</h6>
                  <p class="mb-1 text-secondary">
                    Congratulate, James for new job.
                  </p>
                  <p class="small m-0 text-secondary">Today, 08:00pm</p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="d-flex py-2">
                <img src="{{ asset('dashboard/assets/images/user4.png')}}" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                <div class="m-0">
                  <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                  <p class="mb-2 text-secondary">
                    Lewis added new schedule release.
                  </p>
                  <p class="small m-0 text-secondary">Today, 09:30pm</p>
                </div>
              </div>
            </div>
            <div class="d-grid mx-3 my-1">
              <a href="javascript:void(0)" class="btn btn-primary">View all</a>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdown ms-3">
        <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" href="#!"
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ Storage::url(auth()->user()->image) }}" class="rounded-2 img-3x" alt="Bootstrap Gallery" />
          <div class="ms-2 text-truncate d-lg-block d-none text-white">
            <span class="d-flex opacity-50 small">
                {{ auth()->user()->name }}
            </span>
            @foreach ($roles as $role)
                @if (auth()->user()->role_id === $role->id)
                    <span>{{ $role->name }}</span>
                @endif
            @endforeach
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end shadow-lg">
          <div class="header-action-links">
            <a class="dropdown-item" href="profile.html"><i
                class="bi bi-person border border-primary text-primary"></i>Profile</a>
            <a class="dropdown-item" href="settings.html"><i
                class="bi bi-gear border border-danger text-danger"></i>Settings</a>
            <a class="dropdown-item" href="widgets.html"><i
                class="bi bi-box border border-success text-success"></i>Widgets</a>
          </div>
          <div class="mx-3 mt-2 d-grid">
            <form action="{{ route('logout') }}" method="POST" id="logout">
                @csrf
            </form>
            <a href="#" class="btn btn-primary btn-sm" onclick="event.preventDefault();
            document.getElementById('logout').submit();" >
            Deconnexion
            </a>
          </div>

        </div>
      </div>
    </div>
    <!-- App header actions end -->
  </div>
