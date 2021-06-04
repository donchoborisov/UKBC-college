<ul class="list-unstyled">
    @foreach($items as $menu_item)
        <li ><a class="footer-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>