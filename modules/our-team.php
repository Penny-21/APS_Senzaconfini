<!doctype html>
<html lang="en" class="layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-skin="default" data-assets-path="../assets/" data-template="horizontal-menu-template-no-customizer-starter" data-bs-theme="light">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>APS SenzaConfini</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

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

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <style>
      .email-banner {
        background-color: #f1f3f4;
        padding: 10px 15px;
        border-left: 4px solid #007bff;
        border-radius: 6px;
        font-size: 1rem;
        display: inline-block;
      }
      .email-banner a {
        color: #007bff;
        text-decoration: none;
      }
      .email-banner a:hover {
        text-decoration: underline;
      }

    </style>
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
                  <div class="container">
                    <div class="hero-text-box text-center position-relative">
                      <h1 class="text-primary hero-title display-6 fw-extrabold" data-i18n="Our Team">Our Team</h1>
                    </div>
                  </div>
                </div>
              </section>
              <!-- Hero Section End -->

              <!-- Team Members Section -->
              <section id="team-members" class="section-py">
                <div class="container">
                  <h2 class="mb-4" data-i18n="Team Members">Team Members</h2>
                  <div class="row mb-4">
                    <div class="col-md-9">
                      <!-- President -->
                      <h3 data-i18n="President">President</h3>
                      <p>
                         <strong>Niccolò Ichestre</strong>
                         <span data-i18n="Nicollo Ichestre Description">
                            holds a degree in Political Science and International Studies from the University of Genoa. He chairs the association “Senza Confini APS,” founded in 2020 to promote social inclusion and local development. He has gained experience as a European Project Manager, managing Erasmus+, AMIF and CERV projects. He has held internships in Bucharest and Brussels, honing his skills in multicultural settings. He is known for empathy, confidence and problem-solving orientation. His curiosity and desire for continuous improvement make him an effective leader and promoter of community development.
                         </span>
                      </p>
                    <div class="email-banner mb-3">
                      <strong>Email:</strong> <a href="mailto:niccolo.ichestre1@gmail.com">niccolo.ichestre1@gmail.com</a>
                    </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                      <div class="card mt-3 mt-lg-0 shadow-none w-100">
                        <div class="bg-label-primary border border-bottom-0 border-label-primary position-relative team-image-box d-flex justify-content-center align-items-end" style="height: 220px;">
                          <img src="../assets/linkedin/Niccolò_Ichestre-removebg-preview.png" class="card-img-bottom" style="max-height: 210px; width: auto; position: static;" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-primary text-center">
                          <h5 class="card-title mb-0">Niccolò Ichestre</h5>
                          <p class="text-body-secondary mb-0">President</p>
                          <a href="https://www.linkedin.com/in/niccol%C3%B2-ichestre/" target="_blank" class="btn btn-outline-primary btn-sm mt-2">
                            <i class="icon-base ti tabler-brand-linkedin icon-20px me-1"></i> LinkedIn
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-9">
                      <!-- Artistic & Communication Manager -->
                      <h3 data-i18n="Artistic & Communication Manager">Artistic & Communication Manager</h3>
                      <p>
                        <strong data-i18n="Edoardo Marcuzzi">Edoardo Marcuzzi</strong>
                        <span data-i18n="Edoardo Marcuzzi Description">
                          is a young filmmaker who supports the association “Senza Confini APS” in social media management and the digital part of events. His experience in the audiovisual and communication field makes him a valuable collaborator in the online promotion of the association's activities and projects. In addition, Edoardo contributes to the creation of visual and video content to raise awareness and engage the public in the social and cultural initiatives promoted by “Senza Confini APS.” His creative approach and digital expertise amplify the impact of the association's actions.
                        </span>
                      </p>
                      <div class="email-banner mb-3">
                        <strong>Email:</strong> <a href="mailto:edoardomarcuzzi@hotmail.it">edoardomarcuzzi@hotmail.it</a>
                      </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                      <div class="card mt-3 mt-lg-0 shadow-none w-100">
                        <div class="bg-label-info border border-bottom-0 border-label-info position-relative team-image-box d-flex justify-content-center align-items-end" style="height: 220px;">
                          <img src="../assets/linkedin/Edoardo_img-removebg-preview.png" class="card-img-bottom" style="max-height: 260px; width: auto; position: static;" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-info text-center">
                          <h5 class="card-title mb-0">Edoardo Marcuzzi</h5>
                          <p class="text-body-secondary mb-0">Artistic & Communication Manager</p>
                          <a href="https://www.linkedin.com/in/edoardo-marcuzzi-46a347200/" target="_blank" class="btn btn-outline-primary btn-sm mt-2">
                            <i class="icon-base ti tabler-brand-linkedin icon-20px me-1"></i> LinkedIn
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-9">
                      <!-- Head Project Manager -->
                      <h3 data-i18n="Head Project Manager">Head Project Manager</h3>
                      <p>
                        <strong data-i18n="Costantino Landi">Costantino Landi</strong>
                        <span data-i18n="Costantino Landi Description">
                          is a project manager at SenzaConfini NGO and a dedicated changemaker who believes in the transformative power of education, culture, and human connection. With over seven years of experience in Youth in Action and Erasmus+, he has contributed to 20+ international projects promoting youth empowerment and intercultural dialogue. As a trainer and facilitator, he integrates non-formal education, social planning, and psychosynthesis to foster skills and self-awareness. His journey includes a year at Rondine Cittadella della Pace, immersed in dialogue, peacebuilding, and youth engagement. Costantino has designed and led projects on social entrepreneurship, psychosynthesis, sustainability, creative arts, and gender equality, collaborating with NGOs, institutions, and grassroots actors. Active in CERV, Erasmus+, ESC, and Creative Europe, he sees projects as ecosystems where individuals become co-creators of meaningful, purpose-driven learning and shared growth.
                        </span>
                      </p>
                      <div class="email-banner mb-3">
                        <strong>Email:</strong> <a href="mailto:aps.senzaconfini@gmail.com">aps.senzaconfini@gmail.com</a>
                      </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                      <div class="card mt-3 mt-lg-0 shadow-none w-100">
                        <div class="bg-label-warning border border-bottom-0 border-label-info position-relative team-image-box d-flex justify-content-center align-items-end" style="height: 220px;">
                          <img src="../assets/linkedin/Costantino_Landi-removebg-preview.png" class="card-img-bottom" style="max-height: 210px; width: auto; position: static;" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-danger text-center">
                          <h5 class="card-title mb-0">Costantino Landi</h5>
                          <p class="text-body-secondary mb-0">Head Project Manager</p>
                          <a href="https://www.linkedin.com/in/costantino-landi-3bb88b248/" target="_blank" class="btn btn-outline-primary btn-sm mt-2">
                            <i class="icon-base ti tabler-brand-linkedin icon-20px me-1"></i> LinkedIn
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-9">
                      <!-- EU Project Manager -->
                      <h3 data-i18n="EU Project Manager">EU Project Manager</h3>
                      <p>
                        <strong data-i18n="Marco Maricchiolo">Marco Maricchiolo</strong>
                        <span data-i18n="Marco Maricchiolo Description">
                          is an EU Project Manager with a strong passion for the development and management of EU-funded projects. With a strong background in international cooperation, he has acquired skills in activity planning, performance monitoring, and risk management. Marco holds a Master's degree in Europlanning, which gave him an in-depth understanding of European project management. Currently, he works for Senza Confini APS, where he is involved in the management and implementation of EU-funded projects, such as Erasmus+ and other European programs. He is motivated to contribute to the success of innovative projects that have a positive impact on European communities, working with multidisciplinary teams to develop initiatives that promote education, solidarity and innovation.
                        </span>
                      </p>
                      <div class="email-banner mb-3">
                        <strong>Email:</strong> <a href="mailto:marco.senzaconfiniprojects@gmail.com">marco.senzaconfiniprojects@gmail.com</a>
                      </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                      <div class="card mt-3 mt-lg-0 shadow-none w-100">
                        <div class="bg-label-success border border-bottom-0 border-label-info position-relative team-image-box d-flex justify-content-center align-items-end" style="height: 220px;">
                          <img src="../assets/linkedin/Marco_Maricchiolo-removebg-preview.png" class="card-img-bottom" style="max-height: 210px; width: auto; position: static;" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-success text-center">
                          <h5 class="card-title mb-0">Marco Maricchiolo</h5>
                          <p class="text-body-secondary mb-0">EU Project Manager</p>
                          <a href="https://www.linkedin.com/in/marco-maricchiolo-7ba67b1bb/" target="_blank" class="btn btn-outline-primary btn-sm mt-2">
                            <i class="icon-base ti tabler-brand-linkedin icon-20px me-1"></i> LinkedIn
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-9">
                      <!-- EU Project Manager -->
                      <h3 data-i18n="EU Project Manager">EU Project Manager</h3>
                      <p>
                        <strong data-i18n="Maria Michela Giallaurito">Maria Michela Giallaurito</strong>
                        <span data-i18n="Maria Michela Giallaurito Description">
                          is a professional with solid experience in international affairs and project management. She has worked as an EU Project Manager in Bucharest, managing key European projects such as Erasmus+, CERV and AMIF, coordinating activities with international partners and ensuring the achievement of project objectives. Michela also served as Faculty Advisor during UN conferences in New York, guiding young delegates in diplomatic simulations. Her experience also includes a specialization in leadership, with a Master's degree in Leadership for International Relations.
                        </span>
                      </p>
                      <div class="email-banner mb-3">
                        <strong>Email:</strong> <a href="mailto:michela.senzaconfiniprojects@gmail.com">michela.senzaconfiniprojects@gmail.com</a>
                      </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                      <div class="card mt-3 mt-lg-0 shadow-none w-100">
                        <div class="bg-label-danger border border-bottom-0 border-label-info position-relative team-image-box d-flex justify-content-center align-items-end" style="height: 220px;">
                          <img src="../assets/linkedin/Michela_Giallaurito-removebg-preview.png" class="card-img-bottom" style="max-height: 260px; width: auto; position: static;" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-success text-center">
                          <h5 class="card-title mb-0">Maria Michela Giallaurito</h5>
                          <p class="text-body-secondary mb-0">EU Project Manager</p>
                          <a href="https://www.linkedin.com/in/maria-michela-giallaurito-a2b0192ab/" target="_blank" class="btn btn-outline-primary btn-sm mt-2">
                            <i class="icon-base ti tabler-brand-linkedin icon-20px me-1"></i> LinkedIn
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
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
