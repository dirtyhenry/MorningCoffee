<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <div id="columns">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="pin">
      <?php get_template_part( 'content', get_post_format() ); ?>
    </div>
  <?php endwhile; ?>
  </div>
<?php else : ?>
<?php endif; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
  <ul class="pager" id="post-nav">
    <li class="post-previous">
      <?php next_posts_link( 'plus vieux' ); ?>
    </li>
    <li class="post-next">
      <?php previous_posts_link( 'plus récent' ); ?>
    </li>
  </ul>
<?php endif; ?>

<?php get_footer(); ?>