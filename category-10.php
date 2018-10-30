<?php get_header('splash'); ?>

  <div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">

    <div class="author-bio">

        <h1>
        
        <?php the_archive_title(); ?>

        <?php esc_html_e('Posts Only!', 'wphierarchy'); ?>
        
        </h1>

        <p><?php echo category_description(); ?></p>
        <hr/>
        
    </div>

    <p>
        <?php echo the_author_meta( 'description', $post->post_author );  ?>
    </p>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

    <?php endwhile; else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>

      <p>Template : category-10.php</p>

    </main>

  </div>

  <?php //get_sidebar(); ?>

<?php get_footer('splash'); ?>