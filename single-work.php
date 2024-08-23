<?php 
// Template Name: single work
?>



<?php get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<body>
  <header>
    <a href="/" class="mariana-home-button expand-on-hover">Mariana Valente</a>

    <ul class="header-list">
      <li><a href="/work/" class="expand-on-hover header-selected">Work</a></li>
      <li><a href="/diary/" class="expand-on-hover">Diary</a></li>
      <li><a href="/" class="expand-on-hover">Personal</a></li>
      <li><a href="/info/" class="expand-on-hover">Info</a></li>
    </ul>

    <button class="hamburger-button">
      <span></span>
      <span></span>
      <span></span>
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

  <div class="work-info-mobile">
    <p class="underline">Personal </p>
    <span class="work-info-mobile-space">|</span>
    <p><?php the_field2('title-work-page-work'); ?></p>
    <span>,</span>
    <p><?php the_field2('ano-work-page-work'); ?></p>
  </div>

  <main class="carrossel-works">
    <div class="close-button expand-on-hover">
      <a href="/">X</a>
    </div>


    <ul class="carrossel-image-wrapper">

    <?php 
    $imagens_work = get_field2('imagens-work');

if(isset($imagens_work)) { foreach($imagens_work as $imagem_work) {

    ?>
     <li class="carrossel-slide">
        <img src="<?php echo $imagem_work['imagem-w']; ?>" alt="imagem do trabalho">
      </li>

    <?php 
}}
    ?>
 

    </ul>

    <div class="carrossel-navigation-wrapper">

      <div class="carrossel-work-title">
        <p class="title"><?php the_field2('title-work-page-work') ;?>,</p>
        <p class="year"><?php the_field2('ano-work-page-work'); ?></p>
      </div>

      <div class="carrossel-counter">
        <p class="current-counter">1</p>
        <span>/</span>
        <p class="total-counter">4</p>
      </div>

      <div class="carrossel-navigation">
        <p class="carrossel-back-button expand-on-hover">Previous</p>
        <span>/</span>
        <p class="carrossel-next-button expand-on-hover">Next</p>

      </div>

    </div>

  </main>


  <div class="cursor-circle black-border"></div>


  <script src="./script.js"></script>
  <script src="./js/animaWorks.js"></script>
  <script src="./js/carrossel.js"></script>

</body>

  <?php endwhile; else : endif; ?>
  <?php get_footer(); ?>
