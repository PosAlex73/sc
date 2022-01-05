<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark fixed-top h-100" style="width: 280px; margin-top: 1.5rem; z-index: 100">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach($menu as $item)
            <li class="nav-item">
                <a href="{{ route($item['link']) }}" class="nav-link" aria-current="page">
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
    <hr>
</div>
