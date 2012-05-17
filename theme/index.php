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

<?php get_footer(); ?>