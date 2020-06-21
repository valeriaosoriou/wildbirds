<?php get_header(); ?>

<!-- CONTENT -->
<div class="container my-5">
  <h1><?php the_title(); ?></h1>
  <div class="row pt-5 text-justify">
    <?php if ( have_posts() ): while (have_posts()): the_post(); ?>  
    <div class="col-12 col-sm-6 mb-3">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('post-thumbnails', array(
          'class' => 'img-fluid'));
        } 
      ?>
    </div>
    <div class="col-12 col-sm-6 mb-3">
      <p>
        <?php the_content(); ?>
      </p>
    </div>
    <?php endwhile; endif; ?>
  </div><!-- end row -->
</div><!-- end container -->

<section class="container mt-5">
  <h2 class="text-uppercase text-center">Opening hours</h2>
  <p class="text-center mt-5">
  Monday: 8am-5pm <br><br>
  Tuesday: 9am-5pm <br><br>
  Wednesday: 8am-5pm <br><br>
  Thursday: 10am-5pm <br><br>
  Friday: 8am-5pm <br><br>
  Saturday: 8am-5pm <br><br>
  </p>

  <h2 class="text-uppercase text-center">Address</h2>
  <p class="text-center">7 Claremont Grove, Mt Victoria. <br> Wellington, 6011. <br> New Zealand</p>
  
</section>


<!-- FOOTER -->
<?php get_footer(); ?>