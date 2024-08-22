<?php 
// Template Name: Info
?>


<?php get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<body id="info-page">
  <header>
    <a href="/" class="mariana-home-button expand-on-hover">Mariana Valente</a>

    <ul class="header-list">
      <li><a href="/work/" class="expand-on-hover">Work</a></li>
      <li><a href="/diary/" class="expand-on-hover">Diary</a></li>
      <li><a href="/" class="expand-on-hover personal-home-button">Personal</a></li>
      <li><a href="/info/" class="header-selected expand-on-hover">Info</a></li>
    </ul>

    <button class="hamburger-button">
      <span class="back-white"></span>
      <span class="back-white"></span>
      <span class="back-white"></span>
    </button>

    <div class="header-overlay-mobile">
      <ul class="header-overlay-menu">
        <li><a href="work.html">Work</a></li>
        <li><a href="diary.html">Diary</a></li>
        <li><a href="/" class="overlay-selected">Personal</a></li>
        <li><a href="info.html">Info</a></li>
      </ul>

      <div class="contact-header-mobile">
        <a href="mailto:hello@marianavalente.com">hello@marianavalente.com</a>
      </div>
    </div>
  </header>


  <main class="info-section-wrapper">
    <section class="info-management">

      <p>REPRESENTED BY GROUP ART MANAGEMENT</p>
      <p><a href="mailto:thaisi@groupart.com.br" class="expand-on-hover">thaisi@groupart.com.br</a>
        <a href="tel:+5511944451313" class="expand-on-hover">+55 (11) 94445-1313</a>
      </p>

      <p><a href="mailto:jardel@groupart.com.br" class="expand-on-hover">jardel@groupart.com.br</a>
        <a href="tel:+5511967790125" class="expand-on-hover">+55 (11) 96779-0125</a>
      </p>

    </section>

    <section class="artist-info">
      <div class="artist-info-wrapper">
        <p>Based in New York</p>
        <a href="https://www.instagram.com/mariana.valente_/" target="_blank" class="expand-on-hover">@MARIANA.VALENTE_</a>
        <a href="tel:+5511971987979" class="expand-on-hover">+55 (11) 97198-7979</a>
        <a class="underline expand-on-hover" href="mailto:hello@marianavalente.com">hello@marianavalente.com</a>
      </div>


      <div class="info-img-wrapper expand-on-hover">
        <img src="./assets/img/info-img/profile.jpg" alt="Imagem da Artista">
      </div>

    </section>

  </main>

  <div class="cursor-circle black-border"></div>



  <?php endwhile; else : endif; ?>
<?php get_footer(); ?>
