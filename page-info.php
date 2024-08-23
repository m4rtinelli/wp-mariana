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
        <li><a href="/work/">Work</a></li>
        <li><a href="/diary/">Diary</a></li>
        <li><a href="/" class="overlay-selected">Personal</a></li>
        <li><a href="/info/">Info</a></li>
      </ul>

      <div class="contact-header-mobile">
        <a href="mailto:hello@marianavalente.com">hello@marianavalente.com</a>
      </div>
    </div>
  </header>


  <main class="info-section-wrapper">
    <section class="info-management">

    <?php 
    $args = array(
      'post_type' => 'info',
       'order' => 'ASC'
    );

   

    $the_query = new WP_Query ( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <p><?php the_field2('represented') ?></p>
      <p><a href="mailto:<?php the_field2('email_rep'); ?>" class="expand-on-hover"><?php the_field2('email_rep'); ?></a>
        <a href="tel:+5511944451313" class="expand-on-hover"><?php the_field2('telefone_rep'); ?></a>
      </p>

      <p><a href="mailto:<?php the_field2('email_rep_2'); ?>" class="expand-on-hover"><?php the_field2('email_rep_2'); ?></a>
        <a href="tel:+5511967790125" class="expand-on-hover"><?php the_field2('telefone_rep_2'); ?></a>
      </p>

    </section>

    <section class="artist-info">
      <div class="artist-info-wrapper">
        <p><?php the_field2('based') ?></p>
        <a href="<?php the_field2('insta-link'); ?>" target="_blank" class="expand-on-hover"><?php the_field2('insta') ?></a>
        <a href="tel:+5511971987979" class="expand-on-hover"><?php the_field2('artist-phone'); ?></a>
        <a class="underline expand-on-hover" href="mailto:<?php the_field2('artist-email'); ?>"><?php the_field2('artist-email'); ?></a>
      </div>


      <div class="info-img-wrapper expand-on-hover">
        <img src="<?php the_field2('info-img'); ?>" alt="Imagem da Artista">
      </div>

      <?php endwhile; else: endif; ?>
    </section>

  </main>

  <div class="cursor-circle black-border"></div>



  <?php endwhile; else : endif; ?>
<?php get_footer(); ?>
