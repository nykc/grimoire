<!-- The Loop -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <small>Posted On <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></small>
      <?php the_content(); ?>
      <p class="postmetadata">
        <span>Posted in <?php the_category(', ') ?></span>
        <strong> | </strong>
        <?php edit_post_link('Edit', ' ', '<strong> | </strong>'); ?>
        <?php comments_popup_link('No Comments >>', '1 Comment >>', '% Comments >>'); ?>
      </p>
      <!-- <?php trackback_rdf(); ?> -->
    </div>

  <?php endwhile; else: ?>

    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <h2>No Results Found</h2>
    </div>

  <?php endif; ?>

<!-- end the wordpress loop -->
