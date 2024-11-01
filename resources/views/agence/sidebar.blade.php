<nav id="sidebar" class="sidebar-wrapper">


    <!-- Sidebar profile starts -->
    <div class="sidebar-profile">
        <img src="{{ Storage::url(auth()->user()->image) }}" class="profile-user mb-3" alt="Admin Dashboard" />
      <div class="text-center">
        <h6 class="profile-name m-0 text-nowrap text-truncate">
            {{ auth()->user()->name }}
        </h6>
      </div>
      <div class="d-flex align-items-center mt-lg-3 gap-2">
        <a href="calendar.html" class="icon-box md grd-success-light rounded-2">
          <i class="bi bi-calendar2-check fs-5 text-success"></i>
        </a>
        <a href="events.html" class="icon-box md grd-info-light rounded-2">
          <i class="bi bi-stickies fs-5 text-info"></i>
        </a>
        <a href="settings.html" class="icon-box md grd-danger-light rounded-2">
          <i class="bi bi-whatsapp fs-5 text-danger"></i>
        </a>
      </div>
    </div>
    <!-- Sidebar profile ends -->
    <div class="sidebarMenuScroll">
      <!-- Sidebar menu starts -->
      <ul class="sidebar-menu">
        <li class="active current-page">
          <a href="{{ route('agence') }}">
            <i class="bi bi-pie-chart"></i>
            <span class="menu-text">Dashboard</span>
          </a>
        </li>
        <li>
            <a href="{{ route('agence.agences') }}">
                <i class="bi bi-border-all"></i>
                <span class="menu-text">Agences</span>
            </a>
        </li>
        <li>
            <a href="{{ route('chefzones') }}">
                <i class="fs-3 bi bi-geo"></i>
                <span class="menu-text">Zones</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#!">
              <i class="bi bi-stickies"></i>
              <span class="menu-text">Tontines</span>
            </a>
            <ul class="treeview-menu">
                @foreach ($tontine as $tontines)
                    <li>
                        <a href="{{ route('agence.tontine', $tontines->id) }}">{{ $tontines->name }}</a>
                    </li>
                @endforeach
                {{-- <li>
                    <a href="{{ route('tontine') }}">Voir plus</a>
                </li> --}}

            </ul>
          </li>

        {{-- <li>
          <a href="{{ route('agence.chef_agence') }}">
            <i class="bi bi-check-circle"></i>
            <span class="menu-text">Chefs Agences</span>
          </a>
        </li> --}}
        <li>
            <a href="{{ route('agence.commercial') }}">
                <i class="fs-3 bi bi-people"></i>
              <span class="menu-text">Commerciaux</span>
            </a>
        </li>
        <li>
          <a href="{{ route('agence.transaction') }}">
            <i class="bi bi-wallet2"></i>
            <span class="menu-text">Transactions</span>
          </a>
        </li>
        <li>
            <a href="{{ route('agence.versement') }}">
              <i class="bi bi-wallet2"></i>
              <span class="menu-text">Versement</span>
            </a>
          </li>
        <li>
          <a href="{{ route('agence.reglage') }}">
            <i class="bi bi-gear"></i>
            <span class="menu-text">Settings</span>
          </a>
        </li>
        <li>
          <a href="{{ route('agence.membres') }}">
            <i class="bi bi-person"></i>
            <span class="menu-text">Membres</span>
          </a>
        </li>
      </ul>
    </div>


    <!-- Sidebar menu ends -->

  </nav>
