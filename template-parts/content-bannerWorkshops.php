<!-- CONTENT -->
<!-- SECTION 1: TOP BANNER -->
<section class="container-fluid bg-custom section-top">
    <div class="container pt-3"> 
      <div class="row">
      <?php if ( have_posts() ): while (have_posts()): the_post(); ?>
        <div class="col-12 col-md-6">
          <h1 class="text-left text-uppercase display-1-custom">
          12 Tutors. More than 25 workshops a week. 
          Macrame, painting, pottery, mosaic, drawing. All levels.
          Come and share your talent.
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