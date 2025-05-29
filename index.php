


<!doctype html>
<html
  lang="en"
  class="layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-skin="default"
  data-assets-path="assets/"
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
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" />
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css">
    <link rel="stylesheet" href="assets/vendor/css/pages/ui-carousel.css">

    <link rel="stylesheet" href="assets/vendor/css/core.css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/front-page-landing.css">

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- endbuild -->

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->
        <?php include 'header.php'; ?>
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
                  <li class="menu-item active">
                    <a href="index.php" class="menu-link">
                      <i class="menu-icon icon-base ti tabler-smart-home"></i>
                      <div data-i18n="Home">Home</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="modules/about-us.php" class="menu-link">
                      <i class="menu-icon icon-base ti tabler-info-octagon"></i>
                      <div data-i18n="About Us">About Us</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="modules/our-team.php" class="menu-link">
                      <i class="menu-icon icon-base ti tabler-users-group"></i>
                      <div data-i18n="Our Team">Our Team</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="modules/our-projects.php" class="menu-link">
                      <i class="menu-icon icon-base ti tabler-briefcase"></i>
                      <div data-i18n="Our Projects">Our Projects</div>
                    </a>
                  </li>
                </ul>
              </div>
            </aside>
            <!-- / Menu -->

            <section id="hero-animation">
              <div id="landingHero" class="section-py landing-hero position-relative">
                <div class="container">
                  <div class="hero-text-box text-center position-relative">
                    <h1 class="text-primary hero-title display-6 fw-extrabold">
                      APS SenzaConfini
                    </h1>

                    <!-- Nuova Card con Immagine -->
                    <div class="card mx-auto my-4" style="max-width: 300px;">
                      <img src="assets/img/custom-img/post-4.jpg" class="card-img-top" alt="APS Image" style="width: 100%; max-width: 300px; margin: 0 auto;">
                      <!-- Se vuoi anche un testo sotto l’immagine:
                      <div class="card-body">
                        <p class="card-text">Testo descrittivo opzionale.</p>
                      </div>
                      -->
                    </div>
                    <div class="landing-hero-btn d-inline-block position-relative">
                      <a href="modules/our-projects.php" class="btn btn-primary btn-lg" data-i18n="Discover Our Projects">Discover Our Projects</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Large Card -->
              <div class="card mt-5 mx-auto" style="max-width: 640px; border-radius: 15px; overflow: hidden;">
                <div class="card-header">
                  <h3 data-i18n="erasmus_description">Erasmus+ for Young Refugees</h3>
                </div>
                <div class="card-body">
                  <img
                  src="assets/img/custom-img/Erasmus+ for Young Refugees - Ioannina -  11-16-112024.jpg"
                  alt="Featured Project"
                  class="card-img-top object-fit-cover"
                  style="height: 640px;" />
                </div>
              </div>
              <!-- Large Card End -->
            </section>

            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="swiper swiper-coverflow swiper-3d" id="swiper-3d-coverflow-effect">
                <div class="swiper-wrapper">
                  <?php 
                    $slides = [
                      ["image" => "assets/img/custom-img/Non formal education Erasmus +.jpg", "descriptions" => ["Project: Non formal education Erasmus+", "Location: Serbia, Avala", "Date: August 2024"]],
                      ["image" => "assets/img/custom-img/Intercultural Night - Training Course 4Learning Predeal March 2025.jpg", "descriptions" => ["Project: Intercultural Night - Training Course 4Learning", "Location: Romania, Predeal ", "Date: March 2025"]],
                      ["image" => "assets/img/custom-img/Erasmus+ for Young Refugees - Ioannina -  11-161-1-2024.jpg", "descriptions" => ["Project: Erasmus+ for Young Refugees", "Location: Greece, Ioannina", "Date: November 2024"]],
                      ["image" => "assets/img/custom-img/Training Course 4Learning - Predeal (March 2025).jpg", "descriptions" => ["Project: Training Course 4Learning", "Location: Romania, Predeal", "Date: March 2025"]],
                      ["image" => "assets/img/custom-img/May 2024 Conference ESF+ Lisbon_.jpg", "descriptions" => ["Project: Conference ESF+", "Location: Portugal, Lisbon", "Date: May 2024"]],
                      ["image" => "assets/img/custom-img/May 2024 Conference ESF+ Lisbon_(1).jpg", "descriptions" => ["Project: Conference ESF+", "Location: Portugal, Lisbon", "Date: March 2025"]],
                      ["image" => "assets/img/custom-img/May 2024 Conference ESF+ Lisbon_(2).jpg", "descriptions" => ["Project: Conference ESF+", "Location: Portugal, Lisbon", "Date: March 2025"]],
                      ["image" => "assets/img/custom-img/March 2023 Bucarest - Recul Final Conference.jpg", "descriptions" => ["Project: Recul Final Conference", "Location: Romania, Bucharest", "Date: March 2023"]],
                      ["image" => "assets/img/custom-img/Erasmus+ Ka2 Luxembourg April 2025 _Tech Queens Project_.jpg", "descriptions" => ["Project: Erasmus+ Ka2", "Location: Luxembourg, Esch-sur-Alzette", "Date: April 2025"]],
                      ["image" => "assets/img/custom-img/May 2024 Conference ESF+ Lisbon_.jpg", "descriptions" => ["Project: Conference ESF+", "Location: Portugal, Lisbon", "Date: May 2024"]],
                    ];

                    foreach ($slides as $slide) {
                      $descriptionText = implode("<br>", $slide["descriptions"]);
                      echo '<div class="swiper-slide" 
                              style="background-image: url(\'' . $slide["image"] . '\');"
                              data-image="' . $slide["image"] . '"
                              data-description="' . htmlspecialchars($descriptionText) . '">';
                      echo '<div class="tooltip-container">';
                      echo '<div class="tooltip-content">';
                      foreach ($slide["descriptions"] as $description) {
                        echo '<p>' . $description . '</p>';
                      }
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                    }
                  ?>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <style>
              .swiper-slide {
                position: relative;
                cursor: pointer;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
              }

              .swiper-slide:hover {
                transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
              }

              .tooltip-container {
                position: absolute;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
                display: none;
                background: rgba(0, 0, 0, 0.8);
                color: #fff;
                padding: 10px;
                border-radius: 5px;
                text-align: center;
                z-index: 10;
                opacity: 0;
                transition: opacity 0.3s ease, transform 0.3s ease;
              }

              .swiper-slide:hover .tooltip-container {
                display: block;
                opacity: 1;
                transform: translateX(-50%) translateY(-10px);
              }

              .tooltip-content p {
                margin: 0;
                font-size: 14px;
              }

              .swiper-slide {
                position: relative;
                cursor: pointer;
              }

              .tooltip-container {
                position: absolute;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
                display: none;
                background: rgba(0, 0, 0, 0.8);
                color: #fff;
                padding: 10px;
                border-radius: 5px;
                text-align: center;
                z-index: 10;
              }

              .swiper-slide:hover .tooltip-container {
                display: block;
              }

              .modal-img {
                width: 100%;
                max-height: 70vh;
                object-fit: contain;
              }
            </style>
            <!--/ Content -->

            <!-- Footer -->
            <?php include 'footer.php'; ?>
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
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".swiper-slide").forEach(slide => {
          slide.addEventListener("click", () => {
            const image = slide.getAttribute("data-image");
            const description = slide.getAttribute("data-description");

            document.getElementById("modalImage").src = image;
            document.getElementById("modalDescription").innerHTML = description;

            const modal = new bootstrap.Modal(document.getElementById("slideModal"));
            modal.show();
          });
        });
      });
  </script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="assets/vendor/libs/jquery/jquery.js"></script>

    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="assets/vendor/libs/@algolia/autocomplete-js.js"></script>
    <script src="assets/vendor/libs/pickr/pickr.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/swiper/swiper.js"></script>
    <!-- Main JS -->

    <script src="assets/js/main.js"></script>
    <script src="assets/js/ui-carousel.js"></script>
    <script>
      const LANG_STORAGE_KEY = "currentLang";
      const DEFAULT_LANG = "en";
      const LANG_PATH = "assets/json/locales/";

      function loadLanguage(lang) {
        fetch(`${LANG_PATH}${lang}.json`)
          .then(res => res.json())
          .then(translations => {
            applyTranslations(translations);
            localStorage.setItem(LANG_STORAGE_KEY, lang);
          })
          .catch(err => console.error("Errore caricamento lingua:", err));
      }

      function applyTranslations(translations) {
        // Per il testo (innerText)
        document.querySelectorAll("[data-i18n]").forEach(el => {
          const key = el.getAttribute("data-i18n");
          if (translations[key]) {
            el.innerText = translations[key];
          }
        });

        // Per placeholder input/textarea
        document.querySelectorAll("[data-i18n-placeholder]").forEach(el => {
          const key = el.getAttribute("data-i18n-placeholder");
          if (translations[key]) {
            el.setAttribute("placeholder", translations[key]);
          }
        });
      }

      // Al click sul selettore della lingua
      document.querySelectorAll("[data-language]").forEach(btn => {
        btn.addEventListener("click", () => {
          const lang = btn.getAttribute("data-language");
          loadLanguage(lang);
        });
      });

      // Caricamento iniziale
      document.addEventListener("DOMContentLoaded", () => {
        const savedLang = localStorage.getItem(LANG_STORAGE_KEY) || DEFAULT_LANG;
        loadLanguage(savedLang);
      });
    </script>
    <script src="assets/js/front-page-landing.js"></script>


    <!-- Modal -->
    <div class="modal fade" id="slideModal" tabindex="-1" aria-labelledby="slideModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="slideModalLabel">Project Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
          </div>
          <div class="modal-body text-center">
            <img id="modalImage" src="" alt="Immagine" class="img-fluid modal-img mb-3" />
            <div id="modalDescription"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page JS -->
  </body>
</html>
