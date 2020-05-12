<li class="nav-item has-treeview {{ Request::is('health*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ Request::is('health*') ? "active" : "" }}">
      <i class="nav-icon fas fa-hospital"></i>
      <p>
        स्वास्थ तथा पोषण
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('hospital.index') }}" class="nav-link {{ Request::is('*hospital*') ? "active" : "" }}">
          <p>१. स्वास्थ संस्थाको विवरण</p>
        </a>
      </li>
    </ul>
</li>