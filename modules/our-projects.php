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
                <li class="menu-item">
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
                <li class="menu-item active">
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
            <!-- Hero Section -->
            <section id="hero-animation">
              <div id="landingHero" class="section-py landing-hero position-relative">
                <div class="container">
                  <div class="hero-text-box text-center position-relative">
                    <h1 class="text-primary hero-title display-6 fw-extrabold" data-i18n="Our Projects">
                      Our Projects
                    </h1>
                    <p data-i18n="motto">“Building bridges across Europe, one project at a time.”</p>
                  </div>
                </div>
              </div>
            </section>
            <!-- Hero Section End -->

            <!-- Our Portfolio Section -->
            <section id="our-portfolio" class="section-py">
              <div class="container">
                <h2 class="mb-4" data-i18n="our_portfolio_title">🌍 What We Do: European projects that build connections, impact, and change</h2>

                <p data-i18n="our_portfolio_intro">
                  Senza Confini APS is not just a youth association: we are a permanent laboratory for European project design, a reference point for those who want to turn ideas into real impact. In recent years, we have developed, implemented, and supported innovative projects in Erasmus+, CERV, ESC, Creative Europe, Horizon Europe, LIFE, Interreg NEXT MED, and Virtual Exchange programmes.
                </p>

                <p data-i18n="our_portfolio_strength">
                  Our strength lies in two things: we deeply understand the local context and its needs, and at the same time, we speak the language of Europe. We handle both project design and management, offering professional, reliable, and customized consulting services to third-sector organizations, public administrations, schools, and informal groups.
                </p>

                <h3 class="mt-4" data-i18n="project_types_title">🎯 The projects we carry out</h3>
                <p data-i18n="project_types_intro">
                  We create tailor-made paths for young people, educators, local communities, and professionals, always with an inclusive, innovative, and sustainable approach.
                </p>

                <h4 class="mt-4" data-i18n="project_examples_title">📌 Here are some examples of projects we’ve carried out:</h4>
                <ul>
                  <li data-i18n="project_0">
                    <strong>2020-EDU-02341 With the Children _ Educating Communities:</strong> Project “UMBERTIAMO: EDUCATIONAL COMMUNITY UMBERTO I” — social inclusion, active citizenship, community cooperation, creation of an educational community in the Umbertino district of La Spezia
                  </li>
                  <li data-i18n="project_1">
                    <strong>KA210-YOU “Tech QUEENS - AI” (Erasmus+ KA2):</strong> Young people from Italy and Luxembourg engaged in an AI literacy training journey through local environmental education activities and an international youth policy conference.
                  </li>
                  <li data-i18n="project_2">
                    <strong>KA152-YOU-BA820889 & KA152-YOU-219A1096 (Erasmus+ Youth Exchanges):</strong> Youth exchanges in La Spezia and across Europe to promote active citizenship, intercultural dialogue, and sustainability, involving 60+ young participants in creative, sporting, and participatory activities.
                  </li>
                  <li data-i18n="project_3">
                    <strong>“Comunità Educanti Umberto I” (Con i Bambini – Social Enterprise):</strong> A €1.3 million project that revolutionized education in a city’s peripheral area, thanks to a network between schools, families, associations, and institutions.
                    <br />
                    <a href="#" data-i18n="see_project_link">👉 See the project</a>
                  </li>
                  <li data-i18n="project_4">
                    <strong>KA1 Mobility Projects (2024–2025):</strong> We take part in international training projects for youth workers, promoting non-formal education on mental well-being, inclusion, and digital skills.
                  </li>
                  <li data-i18n="project_5">
                    <strong>KA210-YOU-CD3C7FA9 (Erasmus+ KA2 – 2025):</strong> Currently being launched, this project aims to build a Euro-Mediterranean network of young environmental activists and digital trainers.
                  </li>
                </ul>

                <h3 class="mt-4" data-i18n="services_title">🔧 Our consulting services</h3>
                <p data-i18n="services_intro">
                  In addition to managing projects directly, we offer professional consulting and support services for public and private organizations:
                </p>
                <ul>
                  <li data-i18n="service_1">Call analysis and opportunity identification</li>
                  <li data-i18n="service_2">Tailored project writing and revision</li>
                  <li data-i18n="service_3">Budgeting and financial planning</li>
                  <li data-i18n="service_4">International partnership building and management</li>
                  <li data-i18n="service_5">Implementation, dissemination, and reporting</li>
                </ul>

                <h3 class="mt-4" data-i18n="cta_title">✉️ Want to design a project with us?</h3>
                <p data-i18n="cta_text">
                  Whether you are a municipality, a school, an NGO, or a social enterprise, we can help you build solid, visionary, and fundable projects.
                  <br />
                  Get in touch — let’s have a good chat about it!
                </p>

                <p class="fw-bold" data-i18n="closing_note">
                  Senza Confini APS – European projects to transform communities. <br />
                  From local to Europe. And back again.
                </p>
              </div>
            </section>
            <!-- Our Portfolio Section End -->
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