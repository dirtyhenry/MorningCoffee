<article id="post-<?php the_ID(); ?>">
  <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer class="entry-meta">
		<?php
				$categories_list = wp_get_post_categories(get_the_ID());
				foreach ($categories_list as $category) {
				  $cat = get_category( $category );
				  echo '<span class="label label-info"><a href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->name . '</a></span> ';
			  }
		?>
		<?php
				$tags_list = wp_get_post_tags(get_the_ID());
				foreach ($tags_list as $tag) {
				  $t = get_category( $tag );
				  echo '<span class="label"><a href="' . get_tag_link( $t->cat_ID ) . '">' . $t->name . '</a></span> ';
			  }
		?>
  </footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
