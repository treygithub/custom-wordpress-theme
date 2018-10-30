<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?> >

    <header class="entry-header">

        <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID); ?>"></span>

        <p><?php esc_html_e( 'Enjoy this gallery post', 'wphierarchy' ); ?></p>

        <?php the_title( '<h2><a href=" ' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

        <div class="byline">
            <?php esc_html_e( 'Author:' ); ?> <?php the_author(); ?>
        </div>

    </header>

    <div class="entry-content">

        <?php the_content(); ?>

    </div>
    <!--uncomment if you want to not show comments at all / if they have been turned off by admin-->
    <!-- with current setting the comments will show but no one will be able to comment!-->
    <?php //if( comments_open() ) : ?>

        <?php comments_template(); ?>

    <?php //endif; ?>
</article>