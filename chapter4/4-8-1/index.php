<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h2><?php the_title() ;?></h2>

   <?php the_post_thumbnail(); ?>

   <?php the_excerpt(); ?>

<?php endwhile; else : ?>

   <p><?php _e( '沒有相關文章' ); ?></p>

<?php endif; ?>
