<main id="site-content" role="main">

    <?php

    $archive_title    = '';
    $archive_subtitle = '';

    if ( is_search() ) {
      global $wp_query;

      $archive_title = sprintf(
        '%1$s %2$s',
        '<span class="color-acccent">' . __( 'Search', 'twentytwenty' ) . '</span>',
        '&ldquo;' . get_search_query() . '&rdquo;'
      );
    }

    if ( have_post() ) {

      $i = 0;

      while ( have_post() ) {
        $i++;
        if ( $i > 1 ) {
          echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
        }
        the_post();
        echo '投稿が掲載されますよ';

        get_template_part( 'template-parts/content', get_post_type() );

      }
    } elseif ( is_search() ) {
      ?>

      <div class="no-search-results-form section-inner thin">

        <?php
        get_search_form(
          array(
            'label' => __( 'search again', twentytwenty ),
          )
        );
        ?>
      
      </div><!-- .no-search-results -->

      <?php
    } else {
      echo '投稿はありませんよ';
    }

    ?>

    <?php get_template_part( 'template-parts/pagetation' ); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
