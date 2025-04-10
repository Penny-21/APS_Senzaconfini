<nav class="layout-navbar navbar navbar-expand-xl align-items-center" id="layout-navbar">
  <div class="container-xxl">
    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4 ms-0">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
          <span class="text-primary">
          </span>
        </span>
        <span class="app-brand-text demo menu-text fw-bold text-heading">APS SenzaConfini</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
        <i class="icon-base ti tabler-x icon-sm d-flex align-items-center justify-content-center"></i>
      </a>
    </div>

    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
        <i class="icon-base ti tabler-menu-2 icon-md"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
      <ul class="navbar-nav flex-row align-items-center ms-md-auto">
        <!-- Search -->
        <!--<li class="nav-item navbar-search-wrapper btn btn-text-secondary btn-icon rounded-pill waves-effect">
          <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
            <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
          </a>
        </li>-->
        <!-- /Search -->

        <li class="nav-item dropdown-language dropdown">
          <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill waves-effect" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class="icon-base ti tabler-language icon-22px text-heading"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item waves-effect active" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                <span>English</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item waves-effect" href="javascript:void(0);" data-language="it" data-text-direction="ltr">
                <span>Italian</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Language -->

        <!-- Style Switcher -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill waves-effect" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown" aria-label="Toggle theme (dark)">
            <i class="tabler-moon-stars icon-base ti icon-22px theme-icon-active text-heading"></i>
            <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
            <li>
              <button type="button" class="dropdown-item align-items-center waves-effect" data-bs-theme-value="light" aria-pressed="false">
                <span><i class="icon-base ti tabler-sun icon-22px me-3" data-icon="sun"></i>Light</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item align-items-center waves-effect active" data-bs-theme-value="dark" aria-pressed="true">
                <span><i class="icon-base ti tabler-moon-stars icon-22px me-3" data-icon="moon-stars"></i>Dark</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item align-items-center waves-effect" data-bs-theme-value="system" aria-pressed="false">
                <span><i class="icon-base ti tabler-device-desktop-analytics icon-22px me-3" data-icon="device-desktop-analytics"></i>System</span>
              </button>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
