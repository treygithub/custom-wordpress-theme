<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main extended" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <p>Template : front-Page.php</p>

    </main>

    <?php get_sidebar('front-page'); ?>

  </div>


<?php get_footer(); ?>
