<li class="nav-item has-treeview {{ Request::is('accommodation*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ Request::is('accommodation*') ? "active" : "" }}">
      <i class="nav-icon fas fa-archway"></i>
      <p>
        आवास तथा भवन
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('foundation.index') }}" class="nav-link {{ Request::is('*foundation*') ? "active" : "" }}">
          <p>१. घरको जगको आधारमा</p>
        </a>
      </li>
    </ul>
</li>