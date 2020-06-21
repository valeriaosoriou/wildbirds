<?php get_header(); ?>

<!-- CONTENT -->
<!-- SECTION 1: TOP BANNER -->
<section class="container-fluid bg-custom section-top">
    <div class="container pt-5"> 
      <div class="row">
      <?php if ( have_posts() ): while (have_posts()): the_post(); ?>
        <div class="col-12 col-md-6">
          <h1 class="text-left text-uppercase display-1-custom">
          Every donation is important to us.
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
          <a>
            <img class="float-right img-fluid img-arrow" src="images/down.png" alt="arrow">
          </a>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>

<!-- SECTION 2 -->
  <div class="container my-5">
    <div class="row">
      <div class="col">
        <p><small> Prefer to donate by Bank Deposit?.</small><a href="#"> Clic here.</a></p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>I wish to donate: </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <button class="rounded-0">20 NZD</button>
      </div>
      <div class="col">
        <button>40 NZD</button>
      </div>
      <div class="col">
        <button>50 NZD</button>
      </div>
      <div class="col">
        <button>20 NZD</button>
      </div>
    </div>
    <div class="row">
      <div class="col"></div>
    </div>
</div>

<!-- FOOTER -->
<?php get_footer(); ?>