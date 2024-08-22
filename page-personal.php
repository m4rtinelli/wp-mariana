<?php 
// Template Name: Personal
?>

<?php get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<body>
  <header>
    <a href="/" class="mariana-home-button expand-on-hover">Mariana Valente</a>

    <ul class="header-list">
      <li><a href="/work/" class="expand-on-hover">Work</a></li>
      <li><a href="/diary/" class="expand-on-hover">Diary</a></li>
      <li><a href="/" class="header-selected expand-on-hover personal-home-button">Personal</a></li>
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
      <p>Personal</p>

      <div class="work-counter">
        <div class="work-current-counter"><span>1</span></div>
        <span>/</span>
        <div class="work-last-counter"><span>10</span></div>
      </div>


    </div>
    <main class="work-gallery-wrapper-home">

    <?php 
    $args = array(
      'post_type' => 'personal',
       'order' => 'ASC'
    );

   

    $the_query = new WP_Query ( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <a href="<?php the_permalink(); ?>">
        <div class="work expand-on-hover">
          <div class="work-gallery-img-wrapper">
            <img src="<?php the_field2('preview_image') ?>">
          </div>

          <div class="work-gallery-info">
            <p><?php the_field2('title-work');?></p>
            <span><?php the_field2('ano-work'); ?></span>
          </div>
        </div>
      </a>

    <?php endwhile; else: endif; ?>




      <div class="work expand-on-hover">
        <div class="work-gallery-img-wrapper">
          <img src="./assets/img/work-images/work-2.jpg" alt="work-image">
        </div>

        <div class="work-gallery-info">
          <p>Beauty Series</p>
          <span>2024</span>
        </div>
      </div>

      <div class="work expand-on-hover">
        <div class="work-gallery-img-wrapper">
          <img src="./assets/img/work-images/work-3.jpg" alt="work-image">
        </div>

        <div class="work-gallery-info">
          <p>Beauty Series</p>
          <span>2024</span>
        </div>
      </div>

      <div class="work expand-on-hover">
        <div class="work-gallery-img-wrapper">
          <img src="./assets/img/work-images/work-4.jpg" alt="work-image">
        </div>

        <div class="work-gallery-info">
          <p>Beauty Series</p>
          <span>2024</span>
        </div>
      </div>

      <div class="work expand-on-hover">
        <div class="work-gallery-img-wrapper">
          <img src="./assets/img/work-images/work-5.jpg" alt="work-image">
        </div>

        <div class="work-gallery-info">
          <p>Beauty Series</p>
          <span>2024</span>
        </div>
      </div>

      <div class="work expand-on-hover">
        <div class="work-gallery-img-wrapper">
          <img src="./assets/img/work-images/work-6.jpg" alt="work-image">
        </div>

        <div class="work-gallery-info">
          <p>Beauty Series</p>
          <span>2024</span>
        </div>
      </div>

      <div class="work expand-on-hover">
        <div class="work-gallery-img-wrapper">
          <img src="./assets/img/work-images/work-7.jpg" alt="work-image">
        </div>

        <div class="work-gallery-info">
          <p>Beauty Series</p>
          <span>2024</span>
        </div>
      </div>

      <div class="work expand-on-hover">
        <div class="work-gallery-img-wrapper">
          <img src="./assets/img/work-images/work-8.jpg" alt="work-image">
        </div>

        <div class="work-gallery-info">
          <p>Beauty Series</p>
          <span>2024</span>
        </div>
      </div>

      <div class="work expand-on-hover">
        <div class="work-gallery-img-wrapper">
          <img src="./assets/img/work-images/work-9.jpg" alt="work-image">
        </div>

        <div class="work-gallery-info">
          <p>Beauty Series</p>
          <span>2024</span>
        </div>
      </div>

    </main>
    <div class="carrossel-work-navigator">
      <p class="back-carrossel-work">back</p>
      <p class="next-carrossel-work">next</p>
    </div>
    <div class="carrossel-fancy-counter">
      <div class="progress-bar"></div>
    </div>
  </div>



  <!-- overlay -->
  <div class="overlay-home">

    <div class="overlay-enter">
      <h1 class="expand-on-hover">Mariana Valente</h1>
      <span id="enter" class="expand-on-hover">Enter</span>
    </div>
  </div>

  <div class="cursor-circle"></div>

  <!-- fecha overlay -->

  <?php endwhile; else : endif; ?>

  <?php get_footer(); ?>

