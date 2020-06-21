<?php get_header(); ?>

<div class="container my-5">
  <div class="row">
    <div class="col-12 col-md-9">
      <?php get_template_part('includes/section','content'); ?>
    </div>
    <!--------------------------- ASIDE ----------------------------------->
    <div class="col-12 col-md-3">
      <?php get_sidebar(); ?>
    </div><!-- end col aside --> 
  </div>
</div>
 

<?php get_footer(); ?>