<?php get_header() ?>
    
  <div class= "main-body-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(__('(more...)')); ?></p>
      <hr> 
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    <div class="prev-next-links">
      <div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
      <div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
    </div>
  </div>
</div>
<?php get_sidebar('events'); ?>
</div>
<?php get_footer() ?>