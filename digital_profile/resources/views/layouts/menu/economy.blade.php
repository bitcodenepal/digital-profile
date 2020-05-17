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
      <li class="nav-item">
        <a href="{{ route('special-education.index') }}" class="nav-link {{ Request::is('*special-education*') ? "active" : "" }}">
          <p>२. प्राविधिक तथा बिशेष दक्षता भएका</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('industry.index') }}" class="nav-link {{ Request::is('*industry*') ? "active" : "" }}">
          <p>३. उद्योग सम्बन्धी विवरण</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('vocational.index') }}" class="nav-link {{ Request::is('*vocational*') ? "active" : "" }}">
          <p>४. व्यवसायीक सीपमूलक तालिम</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('income.index') }}" class="nav-link {{ Request::is('*income*') ? "active" : "" }}">
          <p>५. वार्षिक आम्दानी अनुसार</p>
        </a>
      </li>
    </ul>
</li>