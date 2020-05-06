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