<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ (request()->is('index')) ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (request()->is('archive')) ? 'active' : '' }}" href="{{ route('archive') }}">Archive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (request()->is('create_post')) ? 'active' : '' }}" href="{{ route('create_post') }}">Create Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (request()->is('program_info')) ? 'active' : '' }}" href="{{ route('program_info') }}">Program Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('register') }}">Register</a>
      </li>
    </ul>
  </nav>