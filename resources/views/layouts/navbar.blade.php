<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container ">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }} " href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "blog") ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            
            <a class="nav-link  {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-down-right"></i> Login</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>
