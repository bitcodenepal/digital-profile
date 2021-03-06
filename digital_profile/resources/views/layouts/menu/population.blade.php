<li class="nav-item has-treeview {{ Request::is('population*') ? "menu-open" : "" }}">
    <a href="#" class="nav-link {{ (Request::is('population*') || Request::is('mother*')) ? "active" : "" }}">
      <i class="nav-icon fas fa-users"></i>
      <p>
        जनसंख्या विवरण
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('distribution.index') }}" class="nav-link {{ Request::is('*distribution*') ? "active" : "" }}">
          <p>१. जनसंख्या वितरणको अवस्था</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('density.index') }}" class="nav-link {{ Request::is('*density*') ? "active" : "" }}">
          <p>२. जनघनत्वको अवस्था</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('age.index') }}" class="nav-link {{ Request::is('*/age*') ? "active" : "" }}">
          <p>३. उमेर तथा लिंगको आधारमा</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('mother-tongue.index') }}" class="nav-link {{ Request::is('*mother-tongue*') ? "active" : "" }}">
          <p>४. मातृभाषाको आधारमा</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('religion.index') }}" class="nav-link {{ Request::is('*religion*') ? "active" : "" }}">
          <p>५. धर्म अनुसार विवरण</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('caste.index') }}" class="nav-link {{ Request::is('*caste*') ? "active" : "" }}">
          <p>६. जातिगत आधारमा विवरण</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('handicap.index') }}" class="nav-link {{ Request::is('*handicap*') ? "active" : "" }}">
          <p>७. अपाङ्गताको आधारमा विवरण</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('marriage.index') }}" class="nav-link {{ Request::is('*marriage*') ? "active" : "" }}">
          <p>८. वैवाहिक स्थितिको विवरण</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('event.index') }}" class="nav-link {{ Request::is('*event*') ? "active" : "" }}">
          <p>९. व्यक्तिगत घटना विवरण</p>
        </a>
      </li>
    </ul>
</li>