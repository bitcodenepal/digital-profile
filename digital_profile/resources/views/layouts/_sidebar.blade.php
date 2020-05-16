<aside class="main-sidebar sidebar-light-info elevation-4">
    <a href="{{ url('/') }}" class="brand-link" style="margin-top:10px;">
        <img src="{{ asset('img/nepal_flag.png') }}" alt="Logo" class="brand-image" style="opacity: .8">
        &nbsp;&nbsp;&nbsp;
        <span class="brand-text font-weight-light">स्वागतम्</span>
    </a>
    <div class="sidebar">
        <nav class="mt-4">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? "active" : "" }}">
                  <i class="nav-icon fas fa-eye"></i>
                  <p>
                    नगरपालिकाको संक्षिप्त झलक
                  </p>
                </a>
              </li>
              @include('layouts.menu.municipality')
              @include('layouts.menu.population')
              @include('layouts.menu.economy')
              @include('layouts.menu.agriculture')
              @include('layouts.menu.tourism')
              @include('layouts.menu.education')
              @include('layouts.menu.health')
              @include('layouts.menu.hygiene')
              @include('layouts.menu.infrastructure')
              @include('layouts.menu.disaster')
              @include('layouts.menu.accommodation')
              <li class="nav-item">
                <a href="{{ route('miscellaneous.index') }}" class="nav-link {{ Request::is('miscellaneous*') ? "active" : "" }}">
                  <i class="nav-icon fas fa-atom"></i>
                  <p>
                    युवा, खेलकुद र मनोरंजन
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('forest.index') }}" class="nav-link {{ Request::is('forest*') ? "active" : "" }}">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    वन क्षेत्रको अवस्था
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communication.index') }}" class="nav-link {{ Request::is('communication*') ? "active" : "" }}">
                  <i class="nav-icon fas fa-satellite-dish"></i>
                  <p>
                    सञ्चार तथा प्रविधि
                  </p>
                </a>
              </li>
          </ul>
        </nav>
    </div>
</aside>