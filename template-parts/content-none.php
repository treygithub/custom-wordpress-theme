<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

        <header class="entry-header">

          <h1><?php esc_html_e( '404 no page found', 'wphieratchy' ); ?></h1>

        </header>

        <div class="entry-content">

          <p><?php esc_html_e( 'Sorry no content found!', 'wphieratchy' ); ?></p>

          <p><?php echo get_search_form(); ?></p>

        </div>

</article>