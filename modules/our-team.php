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
                <li class="menu-item active">
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
                    <h1 class="text-primary hero-title display-6 fw-extrabold" data-i18n="Our Team">
                      Our Team
                    </h1>
                    <p data-i18n="Team Excerpt">
                      Have questions or need assistance? Contact us and we'll be happy to help!
                    </p>
                    <p>Email: <a href="mailto:aps.senzaconfini@gmail.com">aps.senzaconfini@gmail.com</a></p>
                  </div>
                </div>
              </div>
            </section>
            <!-- Hero Section End -->

            <!-- Contact Us Section -->
            <section id="contact-us" class="section-py">
              <div class="container">
                <h2 class="mb-4" data-i18n="Contact Us">Contact Us</h2>
                <p>
                  SenzaconfiniAPS was founded by a group of passionate individuals dedicated to making a positive impact in the community.  
                  With diverse backgrounds and shared goals, the founders are committed to creating opportunities, fostering collaboration, and inspiring growth.
                </p>
              </div>
            </section>
            <!-- Contact Us Section End -->

            <!-- Team Members Section -->
            <section id="team-members" class="section-py">
              <div class="container">
                <h2 class="mb-4" data-i18n="Team Members">Team Members</h2>

                <!-- President -->
                <h3 data-i18n="President">President</h3>
                <p>
                  <strong>Niccolò Ichestre</strong> holds a degree in Political and International Sciences from the University of Genoa. He chairs the association ‘Senza Confini APS’, founded in 2020 to promote social inclusion and local development. He gained experience as European Project Manager, managing Erasmus+, AMIF and CERV projects. He did internships in Bucharest and Brussels, honing his skills in multicultural contexts. He is known for his empathy, confidence and problem-solving orientation. His curiosity and desire for continuous improvement make him an effective leader and promoter of community development.
                </p>
                <ul>
                  <li><strong>Title:</strong> Mr.</li>
                  <li><strong>Gender:</strong> Male</li>
                  <li><strong>Email:</strong> <a href="mailto:niccolo.ichestre1@gmail.com">niccolo.ichestre1@gmail.com</a></li>
                  <li><strong>Telephone:</strong> +39 3317741692</li>
                  <li><strong>Address:</strong> Via Bragarina, 34, La Spezia, Italy</li>
                </ul>

                <!-- Artistic & Communication Manager -->
                <h3 data-i18n="Artistic & Communication Manager">Artistic & Communication Manager</h3>
                <p>
                  <strong>Edoardo Marcuzzi</strong> is a young filmmaker who supports the association ‘Senza Confini APS’ in the management of social media and the digital part of events. His experience in the audiovisual and communication fields makes him a valuable collaborator for the online promotion of the association's activities and projects. Moreover, Edoardo contributes to the creation of visual and video content to raise awareness and involve the public in the social and cultural initiatives promoted by ‘Senza Confini APS’. His creative approach and digital expertise amplify the impact of the association's actions.
                </p>
                <ul>
                  <li><strong>Title:</strong> Mr.</li>
                  <li><strong>Gender:</strong> Male</li>
                  <li><strong>Email:</strong> <a href="mailto:edoardomarcuzzi@hotmail.it">edoardomarcuzzi@hotmail.it</a></li>
                  <li><strong>Telephone:</strong> +39 3492879150</li>
                </ul>

                <!-- Head Project Manager -->
                <h3 data-i18n="Head Project Manager">Head Project Manager</h3>
                <p>
                  <strong>Costantino Landi</strong> is a project manager at SenzaConfini NGO, a passionate architect of change who believes in the transformative power of education, culture and human connection. Over the past seven years, he has actively shaped the Youth in Action and Erasmus+ landscapes, contributing to over 20 international projects that empower young minds and foster cross-cultural dialogue.
                </p>

                <!-- EU Project Manager -->
                <h3 data-i18n="EU Project Manager">EU Project Manager</h3>
                <p>
                  <strong>Marco Maricchiolo</strong> is a EU Project Manager with a strong passion for the development and management of EU-funded projects. With a solid background in international cooperation, he has acquired skills in activity planning, performance monitoring and risk management. Marco holds a Master's degree in Europlanning, which has enabled him to deepen his knowledge of European project management.
                </p>

                <!-- EU Project Manager -->
                <h3 data-i18n="EU Project Manager">EU Project Manager</h3>
                <p>
                  <strong>Maria Michela Giallaurito</strong> is a professional with solid experience in international affairs and project management. She has worked as EU Project Manager in Bucharest, managing key European projects such as Erasmus+, CERV and AMIF, coordinating activities with international partners and ensuring the achievement of project objectives.
                </p>
              </div>
            </section>
            <!-- Team Members Section End -->
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