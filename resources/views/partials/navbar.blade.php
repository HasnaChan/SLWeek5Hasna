{{-- untuk nyimpen bagian spesifik di halaman yg disebut komponen --}}
{{-- NAVBAR --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container flex">
      <a class="navbar-brand" href="/">Hasna's Jewelry</a>
      <button class="navbar-toggler" type="button">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "card")? 'active' : '' }}" href="/card">Products</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


