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

    ?>
</main>