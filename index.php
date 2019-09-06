<?php get_header(); ?>

<main role="main">
	<?php while ( have_posts() ) : the_post(); ?>

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
		</article>

	<?php endwhile; ?>
</main>


<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Let's Code, Kids!</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Misja
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#misja">Misja</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#produkty">Produkty</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#dla_szkol">Dla szkół</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#kontakt">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container d-flex flex-column">
      <div class="row">
      <div class="col-md-6 text-left">
        <!-- Masthead Heading -->
        <h1>Nauka przez programowanie!</h1>
        <div class="divider-custom divider-light"></div>
        <h6>
          Trenerzy letscodekids.pl prowadzą zajęcia w szpitalach, aby nieustannie pobudzać apetyt na wiedzę i poznawanie, które stanie się przygodą. Podstawą naszych działań jest przekonanie, że nauka nie jest nudna, lecz fascynująca i można ją połączyć z programowaniem. 
        </h6>
        <div class="divider-custom divider-light"></div>
        <a class="btn btn-xl btn-outline-light" href="letscodekids.pl">
            <i class="fas fa-download mr-2"></i>
            Dowiedz się wiecej
        </a>
      </div>
      
     <div class="col-md-6" style="background: url('img/group.png');position: absolute;right: 0px;width: 620px;height: 414px;">
     </div>

    </div>
    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="misja">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-left mb-0">Nasza Misja</h2>

      <div class="divider-custom divider-light"> </div>


      <!-- Portfolio Grid Items -->
      <div class="row">
        <div class="col-md-12">

          <p> Podstawą działań letscodekids.pl jest przekonanie, że nauka nie jest nudna, lecz fascynująca i można ją połączyć z programowaniem. 
          </p>

        </div>
        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="mx-auto">
            <img class="img-fluid"  style="min-height:320px;" src="img/family.png" alt="">
            <p>
              Wsparcie działań łączących programowanie z naukami ścisłymi
            </p>
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
           <div class="mx-auto">
            <img class="img-fluid" style="min-height:320px;" src="img/learining.png" alt="">
            <p>wsparcie rozwoju dzieci poszerzającego ich zainteresowania,</p>
          </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="mx-auto">
            <img class="img-fluid" style="min-height:320px;" src="img/rocket.png" alt="">
            <p>integracja rodzica z dzieckiem (warsztaty rodzinne łączące rodziców i dzieci),</p>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="page-section mb-0" id="produkty">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading">Produkty</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-6 ml-auto">
          <img src="img/Zaznaczenie_033.png">
         
        </div>
        <div class="col-lg-6 mr-auto">
          <h6>Microbit</h6>
          <p class="lead">micro:bit jest malutkim programowalnym komputerem, zaprojektowanym tak, aby nauka programowania mogła zaciekawić min. poprzez doświadczenia fizyczno przyrodnicze</p>
          <h6>Starter Kit</h6>
          <p class="lead">
            Pakiet starter kit, czyli robot z aplikacją do samodzielnego montażu dla dzieci wprowadzający je w świat przedmiotów ścisłych tj. fizyka, chemia, biologia przez zabawę z programowaniem i eksperymentami.
          </p>
        </div>
      </div>

      <!-- About Section Button -->
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="https://letscodekids.pl/microbit-bbc/">
          <i class="fas fa-download mr-2"></i>
          o microbicie
        </a>
      </div>

    </div>
  </section>

  <section class="page-section md-0" id="dla_szkol">
    <div class="container">
      <!-- Contact Section Heading -->
      <h2 class="page-section-heading mb-0">Oferta dla szkół</h2>

      <div class="row">
        <div class="divider-custom divider-light"> </div>

        <div class="col-lg-6"> 
          <p>
          W ramach projektu „Let’s Code Kids!” placówki oświatowe mogą uzyskać kompletny i unikatowy program zajęć interdyscyplinarnych, mające na celu połączyć dziedziny nauki (techniczne i ścisłe), który dostarczy dzieciom wiedzy, narzędzi oraz pomysłów do zarażenia pasją do programowania, fizyki, chemii itd.
          </p>
          <hr>
          <p>
          W skład każdego z nich wchodzą: zestawy płytki edukacyjne Microbit::BBC do budowy oraz programowania robotów, specjalna aplikacja do wsparcia pracy dzieci, moduły rozszerzające (do budowania robotów, czujniki wilgotności) oraz specjalne warsztaty w placówce.
          </p>
          <hr>
          <p>
          Warsztaty z zakresu robotyki oraz programowania dla wszystkich uczniów placówki, oraz certyfikowane warsztaty z prowadzenia zajęć z wykorzystaniem zestawów starter KIT.
          </p>
          <a href="btn btn-xl">Dowiedz się wiecej</a>

        </div>
        <div class="col-lg-6">
            <img src="">
        </div>
      </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="kontakt">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading mb-0">Kontakt</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light"></div>


      <!-- Contact Section Form -->
      <div class="row">
            <div class="col-md-6">
              <div class="box1">
                <div class="image"></div>
                <div class="text">
                  <h6>Telefon:</h6>
                  <h4>792 191 402 </h4>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="box2">
                <div class="image"></div>
                <div class="text">
                  <h6>Email:</h6>
                  <h4>contact@letscodekids.pl </h4>
                </div>
              </div>

            </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-3 mb-5 mb-lg-0">
          <a href="letscodekids/polityka">polityka prywatności</a>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="container">
            <small>Copyright © 2019 Let's Code, Kids!. All Rights Reserved | Kids 
             <a class="btn btn-outline-light btn-social mx-1" href="#">
              <i class="fab fa-fw fa-linkedin-in"></i>
            </a>
            </small>
          </div>
         
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-3">
         
        </div>

      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
