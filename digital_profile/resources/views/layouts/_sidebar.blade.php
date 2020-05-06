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
              <li class="nav-item has-treeview {{ Request::is('municipality*') ? "menu-open" : "" }}">
                <a href="#" class="nav-link {{ Request::is('municipality*') ? "active" : "" }}">
                  <i class="nav-icon fas fa-hotel"></i>
                  <p>
                    नगरपालिकाको चिनारी
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('municipality-geography') }}" class="nav-link {{ Request::is('municipality-geography') ? "active" : "" }}">
                      <p>१. भौगोलिक अवस्थिति</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('municipality-surface.index') }}" class="nav-link {{ Request::is('municipality-surface*') ? "active" : "" }}">
                      <p>२. धरातलीय अवस्था</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview {{ (Request::is('population*') || Request::is('mother*')) ? "menu-open" : "" }}">
                <a href="#" class="nav-link {{ (Request::is('population*') || Request::is('mother*')) ? "active" : "" }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    जनसंख्या विवरण
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('distribution.index') }}" class="nav-link {{ Request::is('*distribution*') ? "active" : "" }}">
                      <p>१. जनसंख्या वितरणको अवस्था</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('density.index') }}" class="nav-link {{ Request::is('*density*') ? "active" : "" }}">
                      <p>२. जनघनत्वको अवस्था</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('age.index') }}" class="nav-link {{ Request::is('*age*') ? "active" : "" }}">
                      <p>३. उमेर तथा लिंगको आधारमा</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('mother-tongue.index') }}" class="nav-link {{ Request::is('*mother-tongue*') ? "active" : "" }}">
                      <p>४. मातृभाषाको आधारमा</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('religion.index') }}" class="nav-link {{ Request::is('*religion*') ? "active" : "" }}">
                      <p>५. धर्म अनुसार विवरण</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('caste.index') }}" class="nav-link {{ Request::is('*caste*') ? "active" : "" }}">
                      <p>६. जातिगत आधारमा विवरण</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('handicap.index') }}" class="nav-link {{ Request::is('*handicap*') ? "active" : "" }}">
                      <p>७. अपाङ्गताको आधारमा विवरण</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('marriage.index') }}" class="nav-link {{ Request::is('*marriage*') ? "active" : "" }}">
                      <p>८. वैवाहिक स्थितिको विवरण</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview {{ Request::is('infrastructure*') ? "menu-open" : "" }}">
                <a href="#" class="nav-link {{ Request::is('infrastructure*') ? "active" : "" }}">
                  <i class="nav-icon fas fa-sort-amount-up"></i>
                  <p>
                    भौतिक विकासको अवस्था
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('infrastructure-road.index') }}" class="nav-link {{ Request::is('infrastructure-road*') ? "active" : "" }}">
                      <p>१. सडक मार्गको विद्यमान अवस्था</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('infrastructure-bridge.index') }}" class="nav-link {{ Request::is('infrastructure-bridge*') ? "active" : "" }}">
                      <p>२. पुल तथा पुलेसाको विवरण </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('infrastructure-path.index') }}" class="nav-link {{ Request::is('infrastructure-path*') ? "active" : "" }}">
                      <p>३. पैदल मार्ग सम्बन्धि विवरण </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('infrastructure-fuel-gas.index') }}" class="nav-link {{ Request::is('infrastructure-fuel-gas*') ? "active" : "" }}">
                      <p>४. इन्धन उपयोग विवरण </p>
                    </a>
                  </li>                    
                </ul>
              </li>
          </ul>
        </nav>
    </div>
</aside>