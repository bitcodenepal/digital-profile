<li class="nav-item has-treeview {{ Request::is('tourism*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ Request::is('tourism*') ? "active" : "" }}">
      <i class="nav-icon fas fa-hiking"></i>
      <p>
        पर्यटन विकास
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('place.index') }}" class="nav-link {{ Request::is('*place*') ? "active" : "" }}">
          <p>१. पर्यटकीय स्थलहरुको विवरण</p>
        </a>
      </li>
    </ul>
</li>