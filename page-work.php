<?php 
// Template Name: Work
?>



<?php get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<body>
  <header>
    <a href="/" class="mariana-home-button expand-on-hover">Mariana Valente</a>

    <ul class="header-list">
      <li><a href="/work/" class="header-selected expand-on-hover">Work</a></li>
      <li><a href="/diary/" class="expand-on-hover">Diary</a></li>
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
        <li><a href="/work/"">Work</a></li>
        <li><a href="/diary/">Diary</a></li>
        <li><a href="/" class="overlay-selected">Personal</a></li>
        <li><a href="/info/">Info</a></li>
      </ul>

      <div class="contact-header-mobile">
        <a href="mailto:hello@marianavalente.com">hello@marianavalente.com</a>
      </div>
    </div>
  </header>

  <div class="main-pai">

    <div class="work-gallery-wrapper-counter">
      <p>Work</p>

      <div class="work-counter">
        <div class="work-current-counter"><span>1</span></div>
        <span>/</span>
        <div class="work-last-counter"><span>10</span></div>
      </div>
    </div>

    <main class="work-gallery-wrapper-work">

    <?php 
    $args = array(
      'post_type' => 'work',
       'order' => 'ASC'
    );

   

    $the_query = new WP_Query ( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <a href="<?php the_permalink(); ?>">
        <div class="work expand-on-hover">
          <div class="work-gallery-img-wrapper">
            <img src="<?php the_field2('preview_image_page_work') ?>" alt="work-image">
          </div>

          <div class="work-gallery-info">
            <p><?php the_field2('title-work-page-work'); ?></p>
            <span><?php the_field2('ano-work-page-work'); ?></span>
          </div>
        </div>
      </a>
      <?php endwhile; else: endif; ?>

     
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
