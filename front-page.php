<?php get_header(); ?>
<style>
  .testing{
    
    background:url(<?php echo get_theme_mod('homepage_banner_image', get_bloginfo('template_url').'/images/glennstory.jpg'); ?>) no-repeat center;
    
    width: 100%;
    height: 30rem;
    /* z-index: 1000; */ 
  }
  .abc{
    padding-top: 0.5rem;
  }
  .background-images-styles{
    -webkit-background-size: contain;
    -moz-background-size: contain;
    -o-background-size: contain;
    background-size: contain;

  }
</style>

<!-- CONTENT -->
<!-- SECTION 1: TOP BANNER -->
<section class="container-fluid bg-custom section-top">
    <div class="container pt-3"> 
      <div class="row">
      <?php if ( have_posts() ): while (have_posts()): the_post(); ?>
        <div class="col-12 col-md-6">
          <h1 class="display-1 text-left font-weight-bold display-1-custom">
            Changing <br> lives <br> through <br> art
          </h1>
        </div>
        <div class="col-12 col-md-6 img">
          <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('post-thumbnails', array(
            'class' => 'float-right img-fluid'));
            } 
          ?>
          <!-- <img class="float-right img-fluid" src="images/facepaint.jpg" alt="art"> -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col img">
          <!-- <a>
            <img class="float-right img-fluid img-arrow" src="images/down.png" alt="arrow">
          </a> -->
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>

  </section>


<?php get_footer(); ?>