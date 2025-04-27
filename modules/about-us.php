<!doctype html>

<html
  lang="en"
  class="layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-skin="default"
  data-assets-path="../assets/"
  data-template="horizontal-menu-template-no-customizer-starter"
  data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>APS SenzaConfini</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="../assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/css/pages/front-page.css">
    <link rel="stylesheet" href="../assets/vendor/libs/nouislider/nouislider.css">
    <link rel="stylesheet" href="../assets/vendor/libs/swiper/swiper.css">
    <link rel="stylesheet" href="../assets/vendor/css/pages/front-page-landing.css">

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- endbuild -->

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->

        <?php include '../header.php'; ?>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu flex-grow-0">
              <div class="container-xxl d-flex h-100">
                <ul class="menu-inner py-1">
                  <!-- Page -->
                  <li class="menu-item">
                    <a href="../index.php" class="menu-link">
                      <i class="menu-icon icon-base ti tabler-smart-home"></i>
                      <div data-i18n="Home">Home</div>
                    </a>
                  </li>
                  <li class="menu-item active">
                    <a href="about-us.php" class="menu-link">
                      <i class="menu-icon icon-base ti tabler-info-octagon"></i>
                      <div data-i18n="About Us">About Us</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="our-team.php" class="menu-link">
                      <i class="menu-icon icon-base ti tabler-users-group"></i>
                      <div data-i18n="Our Team">Our Team</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="our-projects.php" class="menu-link">
                      <i class="menu-icon icon-base ti tabler-briefcase"></i>
                      <div data-i18n="Our Projects">Our Projects</div>
                    </a>
                  </li>
                </ul>
              </div>
            </aside>
            <!-- / Menu -->

            <!-- Content -->
            <div data-bs-spy="scroll" class="scrollspy-example">
              <!-- Hero: Start -->
              <section id="hero-animation">
                <div id="landingHero" class="section-py landing-hero position-relative">
                  <img
                    src="../assets/img/front-pages/backgrounds/hero-bg.png"
                    alt="hero background"
                    class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
                    data-speed="1" />
                  <div class="container">
                    <div class="hero-text-box text-center position-relative">
                      <h1 class="text-primary hero-title display-6 fw-extrabold">
                        APS SenzaConfini
                      </h1>
                      <h2 class="hero-sub-title h6 mb-6">
                        Production-ready & easy to use Admin Template<br class="d-none d-lg-block" />
                        for Reliability and Customizability.
                      </h2>
                      <div class="landing-hero-btn d-inline-block position-relative">
                        <a href="#landingPricing" class="btn btn-primary btn-lg">Discover Our Projects</a>
                      </div>
                    </div>
                    <div id="heroDashboardAnimation" class="hero-animation-img">
                      <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                        <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                          <img
                            src="../assets/img/front-pages/landing-page/hero-dashboard-light.png"
                            alt="hero dashboard"
                            class="animation-img"
                            data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                            data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                          <img
                            src="../assets/img/front-pages/landing-page/hero-elements-light.png"
                            alt="hero elements"
                            class="position-absolute hero-elements-img animation-img top-0 start-0"
                            data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                            data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="landing-hero-blank"></div>
              </section>
              <!-- Hero: End -->

              <!-- Sezione About Us & Aims -->
              <section id="about-us-info" class="section-py">
                <div class="container">
                  <div class="row g-4">
                    <!-- Card: About Us -->
                    <div class="col-md-6">
                      <div class="card h-100 shadow-sm">
                        <div class="card-body">
                          <h2 class="card-title mb-3">About Us</h2>
                          <p class="card-text">
                            Senza Confini is a Social Promotion Association established in 2020 in La Spezia, dedicated to inspiring and empowering young people to actively shape their communities and society as a whole.
                          </p>
                          <p class="card-text">
                            Operating at both local and European levels, our organization is committed to fostering active citizenship among youth while addressing critical challenges such as climate change, gender equality, democracy, and social inclusion.
                          </p>
                          <p class="card-text">
                            At Senza Confini, we believe that young people are the driving force behind positive change. Through innovative projects, educational programs, and active community engagement, we support youth in becoming proactive contributors to their social, cultural, and political environments. By building connections across borders, we aim to create a stronger, more inclusive Europe.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- Card: Our Aims & Closing Message -->
                    <div class="col-md-6">
                      <div class="card h-100 shadow-sm">
                        <div class="card-body">
                          <h2 class="card-title mb-3">Our Aims</h2>
                          <ol class="card-text ps-3">
                            <li class="mb-2">
                              <strong>Promote Active Citizenship</strong><br>
                              We encourage young people to engage in social, cultural, and political life, fostering a sense of responsibility and participation in democratic processes.
                            </li>
                            <li class="mb-2">
                              <strong>Champion Social Inclusion</strong><br>
                              Breaking down barriers of exclusion, we create opportunities for marginalized youth and promote a society where diversity is celebrated, and every individual feels valued.
                            </li>
                            <li class="mb-2">
                              <strong>Support Youth Initiatives</strong><br>
                              Our goal is to provide the tools and resources young people need to bring their ideas to life and lead initiatives addressing pressing issues such as climate action and gender equality.
                            </li>
                            <li class="mb-2">
                              <strong>Empower Creativity and Self-Expression</strong><br>
                              We help young people unlock their creative potential and express their ideas through various cultural and artistic forms.
                            </li>
                            <li class="mb-2">
                              <strong>Build International Connections</strong><br>
                              By strengthening cooperation with European youth organizations, we foster intercultural exchange and collaboration on shared challenges.
                            </li>
                            <li class="mb-2">
                              <strong>Advocate for Democratic Values</strong><br>
                              We promote the ideals of democracy, tolerance, and civil society, empowering youth as agents of meaningful change.
                            </li>
                          </ol>
                          <hr>
                          <h2 class="card-title mb-3">Closing Message</h2>
                          <p class="card-text">
                            At Senza Confini, we are committed to creating a brighter, more inclusive future driven by the energy, passion, and creativity of young people. Join us in shaping a society where everyone has the opportunity to thrive.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- -->


              <!-- Our great team: Start -->
<!--              <section id="landingTeam" class="section-py landing-team">
                <div class="container">
                  <div class="text-center mb-4">
                    <span class="badge bg-label-primary">Our Great Team</span>
                  </div>
                  <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1"
                      >Supported
                      <img
                        src="../assets/img/front-pages/icons/section-title-icon.png"
                        alt="laptop charging"
                        class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                    by Real People
                  </h4>
                  <p class="text-center mb-md-11 pb-0 pb-xl-12">Who is behind these great-looking interfaces?</p>
                  <div class="row gy-12 mt-2">
                    <div class="col-lg-3 col-sm-6">
                      <div class="card mt-3 mt-lg-0 shadow-none">
                        <div
                          class="bg-label-primary border border-bottom-0 border-label-primary position-relative team-image-box">
                          <img
                            src="../assets/img/front-pages/landing-page/team-member-1.png"
                            class="position-absolute card-img-position bottom-0 start-50"
                            alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-primary text-center">
                          <h5 class="card-title mb-0">Sophie Gilbert</h5>
                          <p class="text-body-secondary mb-0">Project Manager</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-info border border-bottom-0 border-label-info position-relative team-image-box">
                          <img
                            src="../assets/img/front-pages/landing-page/team-member-2.png"
                            class="position-absolute card-img-position bottom-0 start-50"
                            alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-info text-center">
                          <h5 class="card-title mb-0">Paul Miles</h5>
                          <p class="text-body-secondary mb-0">UI Designer</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="card mt-3 mt-lg-0 shadow-none">
                        <div
                          class="bg-label-danger border border-bottom-0 border-label-danger position-relative team-image-box">
                          <img
                            src="../assets/img/front-pages/landing-page/team-member-3.png"
                            class="position-absolute card-img-position bottom-0 start-50"
                            alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-danger text-center">
                          <h5 class="card-title mb-0">Nannie Ford</h5>
                          <p class="text-body-secondary mb-0">Development Lead</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="card mt-3 mt-lg-0 shadow-none">
                        <div
                          class="bg-label-success border border-bottom-0 border-label-success position-relative team-image-box">
                          <img
                            src="../assets/img/front-pages/landing-page/team-member-4.png"
                            class="position-absolute card-img-position bottom-0 start-50"
                            alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-success text-center">
                          <h5 class="card-title mb-0">Chris Watkins</h5>
                          <p class="text-body-secondary mb-0">Marketing Manager</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>-->
              <!-- Our great team: End -->
</div>
            <!--/ Content -->

            <!-- Footer -->
            <?php include '../footer.php'; ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../assets/vendor/libs/@algolia/autocomplete-js.js"></script>
    <script src="../assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="../assets/vendor/libs/swiper/swiper.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../assets/vendor/libs/i18n/i18n.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->

    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/front-page-landing.js"></script>

    <!-- Page JS -->
  </body>
</html>
