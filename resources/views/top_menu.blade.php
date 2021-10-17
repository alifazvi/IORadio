<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <ul class="navbar-nav">
        <a href="{{ route('home') }}" class="nav-link active">
            <i class="nav-icon"></i>
            <p>Home</p>
        </a>
        @if(Auth::check())

            <li class="nav-item">
                <a class="nav-link {{ (request()->is('create_post')) ? 'active' : '' }}"
                   href="{{ route('create_post') }}">Create
                    Post</a>
            </li>
        @endif
        <a href="{{ route('archive') }}" class="nav-link active">
            <i class="nav-icon"></i>
            <p>Archives</p>
        </a>

    </ul>
</nav>
