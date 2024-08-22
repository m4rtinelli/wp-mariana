<?php 
// Template Name: Diary
?>

<?php get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<body>
  <header>
    <a href="/" class="mariana-home-button expand-on-hover">Mariana Valente</a>

    <ul class="header-list">
      <li><a href="/work/" class="expand-on-hover">Work</a></li>
      <li><a href="/diary/" class="header-selected expand-on-hover">Diary</a></li>
      <li><a href="/" class="expand-on-hover personal-home-button">Personal</a></li>
      <li><a href="/info/" class="expand-on-hover">Info</a></li>
    </ul>

    <button class="hamburger-button">
      <span></span>
      <span></span>
      <span></span>
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

  <div class="main-pai">

    <div class="work-gallery-wrapper-counter">
      <p>Diary</p>

      <div class="work-counter">
        <div class="work-current-counter"><span>1</span></div>
        <span>/</span>
        <div class="work-last-counter"><span>10</span></div>
      </div>
    </div>
    <main class="work-gallery-wrapper-diary">

      <a href="./summer.html">
        <div class="work expand-on-hover">
          <div class="work-gallery-img-wrapper">
            <img src="./assets/img/diary-images/diary-img-1.jpg" alt="work-image">
          </div>

          <div class="work-gallery-info">
            <p>Summer</p>
            <span>2022</span>
          </div>
        </div>
      </a>
    </main>

    <div class="carrossel-work-navigator">
      <p class="back-carrossel-work">back</p>
      <p class="next-carrossel-work">next</p>
    </div>
    <div class="carrossel-fancy-counter">
      <div class="progress-bar"></div>
    </div>

  </div>

  <div class="cursor-circle black-border"></div>



  <?php endwhile; else : endif; ?>
  <?php get_footer(); ?>
