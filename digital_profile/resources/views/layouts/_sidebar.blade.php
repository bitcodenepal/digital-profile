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
              @include('layouts.menu.infrastructure')
          </ul>
        </nav>
    </div>
</aside>