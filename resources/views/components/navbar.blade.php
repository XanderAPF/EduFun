<nav class="navbar navbar-expand-lg bg-light py-3">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/images/logo.png') }}" alt="Bootstrap" width="100" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fw-semibold" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
              <li>
                <a class="dropdown-item" href="{{ route('category.show', ['id' => $category->id]) }}">
                  {{ $category->name }}
                </a>
              </li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('writers.index') }}">Writes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('popular') }}">Popular</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
