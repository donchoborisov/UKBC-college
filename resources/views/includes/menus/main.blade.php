<ul class="navbar-nav">
    @foreach($items as $menu_item)
        <li  class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>