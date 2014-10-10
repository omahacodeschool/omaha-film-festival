<?php get_header() ?>
    
<!-- Start to the body content -->
<div class="body-wrapper clearfix">
<?php get_sidebar() ?>
<!-- Main Body Content -->
<div class="main-body">
  <div class= "title-banner clearfix">
    <div class= "page-title">
      <?php $title = single_term_title('', false) ?>
      <?php if (gettype( $title )=="string" ): ?>
        <h1><?php echo $title ?></h1>
      <?php else: ?>
        <h1><?php the_title() ?></h1>
      <?php endif ?>
    </div>
    <div class= "social-media">
      <h2>Follow | t | f</h2>
    </div>
  </div>
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