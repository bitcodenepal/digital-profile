<li class="nav-item has-treeview {{ Request::is('disaster*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ Request::is('disaster*') ? "active" : "" }}">
      <i class="nav-icon fas fa-house-damage"></i>
      <p>
        विपद सम्बन्धि विवरण
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('house.index') }}" class="nav-link {{ Request::is('*house*') ? "active" : "" }}">
          <p>१. भवन मापदण्डको विवरण</p>
        </a>
      </li>
    </ul>
</li>