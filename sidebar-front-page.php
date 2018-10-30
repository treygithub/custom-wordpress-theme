<?php 
if( ! is_active_sidebar( 'front-page' ) ) {
    return;
}
?>

<aside class="widget-area" id="secondary" role="complementary">

    <!-- <p>Place widgets here!</p> -->
    <?php dynamic_sidebar( 'front-page' ); ?>

</aside>