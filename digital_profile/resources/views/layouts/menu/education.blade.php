<li class="nav-item has-treeview {{ Request::is('education*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ Request::is('education*') ? "active" : "" }}">
      <i class="nav-icon fas fa-school"></i>
      <p>
        शैक्षिक विकास
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('literacy.index') }}" class="nav-link {{ Request::is('*literacy*') ? "active" : "" }}">
          <p>१. हालको साक्षरताको अवस्था</p>
        </a>
      </li>
    </ul>
</li>