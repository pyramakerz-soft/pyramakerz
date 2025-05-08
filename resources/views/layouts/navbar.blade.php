<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <style>
    .navbar>ul>li {
      white-space: normal !important;
    }
  </style>
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="{{ route('customer.index') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <img src="{{ asset('/assets/img/logo-orange.png') }}">
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="{{ route('customer.index') }}">{{ __('navbar.home') }}</a></li>
        <li><a class="nav-link scrollto" href="{{ route('customer.index') }}/#about">{{ __('navbar.about') }}</a></li>
        <li class="dropdown"><a href="{{ route('customer.index') }}/#solution">{{ __('navbar.solutions') }} <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{ route('customer.schools') }}">{{ __('navbar.school_portal') }}</a></li>
            <li><a href="{{ route('customer.students') }}">{{ __('navbar.student_portal') }}</a></li>
            <li><a href="{{ route('customer.competitions') }}">{{ __('navbar.competitions') }}</a></li>
            <li><a href="{{ route('customer.alefBot') }}">{{ __('navbar.alef_bot') }}</a></li>
          </ul>
        </li>
        <li id="packages_list" style="display: none;"><a class="nav-link scrollto" href="{{ route('customer.packages') }}">{{ __('navbar.packages') }}</a></li>
        <li><a class="nav-link scrollto" href="{{ route('customer.blogs') }}">{{ __('navbar.blogs') }}</a></li>



        <li class="dropdown" id="admin-menu" style="display: none;"><a href="{{ route("customer.index") }}">{{ __('navbar.admin_menu') }} <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li class="admin_choices"><a class="nav-link scrollto" href="{{ route('admin.viewProducts') }}">{{__('navbar.products')}}</a></li>
            <li class="admin_choices"><a class="nav-link scrollto" href="{{ route('admin.viewPackages') }}">{{__('navbar.packages')}}</a></li>
            <li class="admin_choices"><a class="nav-link scrollto" href="{{ route('admin.viewPromos') }}">{{__('navbar.promos')}}</a></li>
            <li class="admin_choices"><a class="nav-link scrollto" href="{{ route('admin.viewOrders') }}">{{__('navbar.orders')}}</a></li>
          </ul>
        </li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->

    <div class="buttons d-flex align-items-center">
      <a class="btn-getstarted scrollto d-inline-block" style="width: auto; white-space: nowrap; text-align: center;" href="{{ route("customer.index")}}/#contact" data-aos="flip-up" data-aos-delay="400">{{ __('navbar.contact') }}</a>
      <!-- Auth Section -->
      <div id="authLinks"></div>
      <!-- Language Switcher -->
      <div class="dropdown mx-3">
        <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown">
          {{ strtoupper(app()->getLocale()) }}
        </a>
        <ul class="dropdown-menu dropdown-menu-end" id="langDropdownMenu">
          <li><a class="dropdown-item" href="{{ route('change.lang', 'en') }}">English</a></li>
          <li><a class="dropdown-item" href="{{ route('change.lang', 'ar') }}">العربية</a></li>
        </ul>
      </div>

    </div>

  </div>
</header><!-- End Header -->
<!-- <script>
  document.addEventListener("DOMContentLoaded", function() {
    fetch('https://ipapi.co/json/')
      .then(response => response.json())
      .then(data => {
        const countryCode = 'SA';
        if (countryCode === 'EG') {
          localStorage.setItem('user_country', 'egypt');
        } else if (countryCode === 'SA') {
          localStorage.setItem('user_country', 'saudi');
          getElementById("packages_list").style.display = "block";
        } else {
          localStorage.setItem('user_country', 'other');
        }
        // location.reload(); 
      });
  });
</script> -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const userCountry = localStorage.getItem('user_country');
    if (!userCountry) {
      fetch('https://ipapi.co/json/')
        .then(response => response.json())
        .then(data => {
          const countryCode = data.country;
          // const countryCode = 'SA';
          let detectedCountry = countryCode;
          if (countryCode === 'EG') {
            detectedCountry = 'egypt';
          } else if (countryCode === 'SA') {
            detectedCountry = 'saudi';
            document.getElementById("packages_list").style.display = "block";
          }
          localStorage.setItem('user_country', detectedCountry);
        })
        .catch(error => {
          console.error('IP detection failed:', error);
        });
    } else if (userCountry === 'saudi') {
      document.getElementById("packages_list").style.display = "block";
    }
    document.getElementById("packages_list").style.display = "block";
  });
</script>

<script>
  const langDropdown = document.getElementById('langDropdown');
  const langDropdownMenu = document.getElementById('langDropdownMenu');

  // When dropdown is shown
  langDropdown.addEventListener('show.bs.dropdown', function() {
    langDropdownMenu.classList.add('d-flex', 'flex-column');
  });

  // When dropdown is hidden
  langDropdown.addEventListener('hide.bs.dropdown', function() {
    langDropdownMenu.classList.remove('d-flex', 'flex-column');
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let token = localStorage.getItem("auth_token_pyra12234");

    if (token) {
      axios.get(@json(url('/api/user')), {
          headers: {
            Authorization: `Bearer ${token}`
          }
        })
        .then(response => {
          let user = response.data;

          // Check if user has the 'admin' role
          if (user.role === "admin") {
            document.getElementById("admin-menu").style.display = "block"; // Show menu
          }
        })
        .catch(error => {
          console.error("Failed to fetch user:", error);
        });
    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let token = localStorage.getItem('auth_token_pyra12234');

    if (token) {
      // If logged in, show account icon
      document.getElementById("authLinks").innerHTML = `
                  <div class="dropdown">
                      <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown">
                          <i class="bi bi-person-circle" style="font-size: 24px; color: #ff7f00; margin-right: 7px;"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                          <li><button class="dropdown-item text-danger" onclick="account()">{{ __('navbar.manage_account') }}</button></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><button class="dropdown-item text-danger" onclick="logout()">{{ __('navbar.logout') }}</button></li>
                      </ul>
                  </div>
              `;
    } else {
      // If not logged in, show Login button
      document.getElementById("authLinks").innerHTML = `<a class="btn-getstarted scrollto d-inline-block text-nowrap" href="{{ route('customer.login') }}" data-aos="flip-up" data-aos-delay="400">{{ __('navbar.login') }}</a>`;
    }
  });

  function account() {
    window.location.href = "{{ route('customer.account') }}";
  }

  function logout() {
    let token = localStorage.getItem('auth_token_pyra12234');

    axios.post(@json(url('/api/logout')), {}, {
        headers: {
          Authorization: `Bearer ${token}`
        }
      })
      .then(response => {
        localStorage.removeItem('auth_token_pyra12234');
        localStorage.removeItem('user_country');
        window.location.href = "{{ route('customer.login') }}";
      })
      .catch(error => {
        // alertError("Logout failed! Clearing session...");
        clearAuthData();
        window.location.href = "{{ route('customer.index') }}";
      });
  }

  function clearAuthData() {
    localStorage.removeItem('auth_token_pyra12234');
    localStorage.removeItem('user_country');
    sessionStorage.clear();
    document.cookie.split(";").forEach(cookie => {
      document.cookie = cookie.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date(0).toUTCString() + ";path=/");
    });
  }
</script>