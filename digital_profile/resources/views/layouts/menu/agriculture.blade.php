<li class="nav-item has-treeview {{ Request::is('agriculture*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ Request::is('agriculture*') ? "active" : "" }}">
      <i class="nav-icon fas fa-seedling"></i>
      <p>
        कृषि तथा पशु विकास
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('irrigation.index') }}" class="nav-link {{ Request::is('*irrigation*') ? "active" : "" }}">
          <p>१. सिंचाइ सुबिधा सम्बन्धी विवरण</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('crop.index') }}" class="nav-link {{ Request::is('*crop*') ? "active" : "" }}">
          <p>२. अन्न, दलहन र तेलहन बाली</p>
        </a>
      </li>
    </ul>
</li>