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
                <img
                  src="../assets/img/front-pages/backgrounds/hero-bg.png"
                  alt="hero background"
                  class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
                  data-speed="1" />
                <div class="container">
                  <div class="hero-text-box text-center position-relative">
                    <h1 class="text-primary hero-title display-6 fw-extrabold" data-i18n="Our Projects">
                      Our Projects
                    </h1>
                  </div>
                </div>
              </div>
            </section>
            <!-- Hero Section End -->

            <!-- About Us Section -->
            <section id="about-us-info" class="section-py">
              <div class="container">
                <h2 class="mb-4" data-i18n="About Us">About Us</h2>
                <p data-i18n="About Us Full Text 1">
                  Senza Confini APS is a youth-driven association where young people take center stage in designing and implementing impactful initiatives.
                </p>
                <p data-i18n="About Us Full Text 2">
                  Our work spans multiple levels, leveraging the diverse skills, knowledge, and passions of our members. Through collaboration with local stakeholders and youth networks, we create opportunities for young people to grow as active citizens and develop valuable expertise in project management and community engagement.
                </p>
                <p data-i18n="About Us Full Text 3">
                  Our commitment is to involve young people from our area in every activity, fostering a thriving network of youth workers who gain hands-on experience while working alongside us. Our efforts can be grouped into three main areas:
                </p>
              </div>
            </section>
            <!-- About Us Section End -->

            <!-- Our Portfolio Section -->
            <section id="our-portfolio" class="section-py">
              <div class="container">
                <h2 class="mb-4" data-i18n="Our Portfolio">Our Portfolio</h2>

                <!-- Local Networking -->
                <h3 class="mt-4" data-i18n="Local Networking and Information Initiatives">1. Local Networking and Information Initiatives</h3>
                <p data-i18n="Local Networking and Information Initiatives Description">
                  At Senza Confini, we actively promote awareness and provide vital information to the citizens of La Spezia and the surrounding areas.
                </p>
                <ul>
                  <li data-i18n="Community Outreach">
                    <strong>Community Outreach:</strong>  
                    We organize campaigns on pressing issues, such as combating violence against women, raising awareness about public health measures (e.g., anti-COVID hygiene protocols), and more. These campaigns are tailored to reach vulnerable groups, including the elderly, immigrants, and NEETs.
                  </li>
                  <li data-i18n="Collaborative Networking">
                    <strong>Collaborative Networking:</strong>  
                    By involving other local organizations, we build a strong network for exchanging best practices, ensuring a meaningful and sustainable impact.
                  </li>
                  <li data-i18n="Digital Outreach">
                    <strong>Digital Outreach:</strong>  
                    Through our social media platforms, we extend our reach, sharing knowledge and resources with the community and beyond.
                  </li>
                </ul>

                <!-- Event Creation -->
                <h3 class="mt-4" data-i18n="Event Creation and Sociocultural Projects">2. Event Creation and Sociocultural Projects</h3>
                <p data-i18n="Event Creation and Sociocultural Projects Description">
                  We design and implement events and small-scale sociocultural initiatives to address diverse community needs.
                </p>
                <ul>
                  <li data-i18n="Cultural and Educational Programs">
                    <strong>Cultural and Educational Programs:</strong>  
                    From promoting art, theater, and environmental awareness in schools to fostering an appreciation for local culture, we aim to enrich the lives of young people and the broader community.
                  </li>
                  <li data-i18n="Community Dialogues">
                    <strong>Community Dialogues:</strong>  
                    We facilitate meetings between local government representatives and civil society actors to address community issues and strengthen civic engagement.
                  </li>
                  <li data-i18n="Fundraising and Support Initiatives">
                    <strong>Fundraising and Support Initiatives:</strong>  
                    By pooling the skills and resources of our members, we organize fundraisers to support individuals or organizations in need. Often, we secure funding through creative methods such as dinners, bank foundation grants, or municipal contributions.
                  </li>
                </ul>

                <!-- Collaboration -->
                <h3 class="mt-4" data-i18n="Collaboration in Larger-Scale Projects">3. Collaboration in Larger-Scale Projects</h3>
                <p data-i18n="Collaboration in Larger-Scale Projects Description">
                  Our association also operates on a broader level, partnering with influential organizations in La Spezia to drive substantial change.
                </p>
                <ul>
                  <li data-i18n="Strategic Partnerships">
                    <strong>Strategic Partnerships:</strong>  
                    Collaborations with established entities, such as Coop. Mondo Aperto and Coop. Lindbergh, enable us to participate in and contribute to more complex, large-scale projects.
                  </li>
                </ul>
              </div>
            </section>
            <!-- Our Portfolio Section End -->

            <!-- Closing Note -->
            <section id="closing-note" class="section-py">
              <div class="container">
                <h2 class="mb-4" data-i18n="Closing Note">Closing Note</h2>
                <p data-i18n="Closing Note Text">
                  Senza Confini APS is dedicated to empowering youth and fostering community collaboration. Our projects and initiatives continue to inspire change, drive progress, and strengthen bonds across La Spezia and beyond.
                </p>
              </div>
            </section>
            <!-- Closing Note End -->
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