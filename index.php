<?php get_header() ?>
    
  <div class= "main-body-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <p><?php the_content(__('(more...)')); ?></p>
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
</div>
<?php get_sidebar('events'); ?>
</div>
<?php get_footer() ?>