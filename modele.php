<?php
/* Template Name: Home */


get_header(); ?>
<div id="bandeau">

</div>
<div id="main">
<div id="content" style="background-image: url(<?php echo (get_theme_mod('contCtrl')); ?>);">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="title" style="color: <?php echo (get_theme_mod('textColor'))?> ;"><?php the_title(); ?></h1>
<p style="color: <?php echo (get_theme_mod('textColor'))?> ;"><?php the_content(__('(more...)')); ?></p>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<div class="post">
  <?php
  query_posts(array('category_name' => 'jeux'));
  while ( have_posts() ) : the_post();
    echo '<div class="innerPost">';
    the_title();
    the_content();
    echo '</div>';
  endwhile;
  wp_reset_query();
   ?>
</div>
<div class="people">
  <h1 id="peopleTitle"><?php echo (get_theme_mod('titlePeople')); ?></h1>
  <p id="peopleContent"><?php echo (get_theme_mod('contentPeople')); ?></p>
  <div class="memberWrapper">
    <?php
    query_posts(array('category_name' => 'Team'));
    while ( have_posts() ) : the_post();
      echo '<div class="people-img">';
      the_content();
      echo '</div>';
    endwhile;
    wp_reset_query();

    ?>
  </div>
</div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
