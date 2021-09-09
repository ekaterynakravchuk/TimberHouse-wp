<?php get_header(); ?>
  <!-- main -->
  <main class="main">
    <div class="container">
      <div class="main__title">
      <?php the_field('main__title') ?>
      </div>
      <div class="main__text">
      <?php the_field('main__text') ?>
      </div>
      <div class="main__img">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="">
      </div>
      <!-- project -->
      <div class="project">
        <div class="project__title">
            <?php the_field('project__title') ?>
        </div>
        <?php
$featured_posts = get_field('project__item');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $post ): 

        setup_postdata($post); ?>
        <li class="project__item">
            <div class="project__name">
                <?php the_field('project__name') ?>
            </div>
            <div class="project__size">
                <?php the_field('project__size') ?>
            </div>
            <div class="project__area">
                <?php the_field('project__area') ?>
            </div>
            <div class="project__price">
                <?php the_field('project__price') ?>
            </div>
            <div class="project__images">
            <div class="progect__images-item">
                <img src="<?php the_field('project__photo') ?>" alt="">
            </div>
            <div class="progect__images-item">
                <img src="<?php the_field('project__plan') ?>" alt="">
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php 

    wp_reset_postdata(); ?>
<?php endif; ?>
      </div>
    </div>
    <!-- download -->
    <div class="download">
      <div class="container">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/home-download.png" alt="">
        <a class="download__link" href="<?php the_field('download__link') ?>">СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
      </div>
    </div>
    <!-- gallery -->
    <div class="gallery">
      <div class="container">
        <div class="gallery__title">
            <?php the_field('gallery__title') ?>
        </div>
        <div class="gallery__text">
            <?php the_field('gallery__text') ?>
        </div>
        <div id="gallery__inner">
            <?php the_field('gallery') ?>
        </div>
        <div class="main__img">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="">
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>  