<li class="nav-item has-treeview {{ Request::is('hygiene*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ Request::is('hygiene*') ? "active" : "" }}">
      <i class="nav-icon fas fa-hand-holding-water"></i>
      <p>
        खानेपानी तथा सरसफाई
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('water.index') }}" class="nav-link {{ Request::is('*water*') ? "active" : "" }}">
          <p>१. खानेपानीको श्रोतको आधारमा</p>
        </a>
      </li>
    </ul>
</li>