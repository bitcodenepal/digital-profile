<li class="nav-item has-treeview {{ Request::is('economy*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ Request::is('economy*') ? "active" : "" }}">
      <i class="nav-icon fas fa-hand-holding-usd"></i>
      <p>
        प्रमुख आर्थिक विवरण
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('occupation.index') }}" class="nav-link {{ Request::is('*occupation*') ? "active" : "" }}">
          <p>१. प्रमुख पेशा अनुसार</p>
        </a>
      </li>
    </ul>
</li>