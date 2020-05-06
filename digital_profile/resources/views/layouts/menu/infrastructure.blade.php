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