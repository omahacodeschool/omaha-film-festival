<?php get_header() ?>
    
  <div class= "main-body-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(__('(more...)')); ?></p>
      <hr> 
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
</div>

<!-- Events sidebar -->
<div class="events-sidebar sidebar">
  <h1>Events</h1>
  <ul>
    <li>Sample content</li>
    <li>Sample content</li>
    <li>Sample content</li>
    <li>Sample content</li>
  </ul>
</div>
</div>
<?php get_footer() ?>