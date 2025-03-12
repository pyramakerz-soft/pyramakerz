<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="{{ route('customer.index') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <img src="{{ asset('/assets/img/logo-orange.png') }}">
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="{{ route('customer.index') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="/#about">About</a></li>
        <li class="dropdown"><a href="/#solution">Solutions <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{ route('customer.schools') }}">School Portal</a></li>
            <li><a href="{{ route('customer.students') }}">Student Portal</a></li>
            <li><a href="{{ route('customer.competitions') }}">Competitions</a></li>
            <li><a href="{{ route('customer.alefBot') }}">Alef Bot</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{ route('customer.packages') }}">Packages</a></li>
        <li><a class="nav-link scrollto" href="{{ route('customer.blogs') }}">Blogs</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->

    <div class="buttons d-flex align-items-center">
      <a class="btn-getstarted scrollto d-inline-block" style="width: 153px;" href="/#contact" data-aos="flip-up" data-aos-delay="400">Get in touch</a>

      <!-- Auth Section -->
      <div id="authLinks"></div>
    </div>

  </div>
</header><!-- End Header -->

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let token = localStorage.getItem('auth_token_pyra12234');

    if (token) {
      // If logged in, show account icon
      document.getElementById("authLinks").innerHTML = `
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle" style="font-size: 24px; color: #ff7f00;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="/account">Manage Account</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><button class="dropdown-item text-danger" onclick="logout()">Logout</button></li>
                    </ul>
                </div>
            `;
    } else {
      // If not logged in, show Login button
      document.getElementById("authLinks").innerHTML = `
                <a class="btn-getstarted scrollto d-inline-block" href="/login" data-aos="flip-up" data-aos-delay="400">Login</a>
            `;
    }
  });

  function logout() {
    let token = localStorage.getItem('auth_token_pyra12234');

    axios.post(@json(url('/api/logout')), {}, {
        headers: {
          Authorization: `Bearer ${token}`
        }
      })
      .then(response => {
        localStorage.removeItem('auth_token_pyra12234');
        window.location.href = "{{ route('customer.login') }}";
      })
      .catch(error => {
        alert("Logout failed!");
      });
  }
</script>