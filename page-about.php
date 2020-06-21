<?php get_header(); ?>

<!-- CONTENT -->
<!-- SECTION 1: TOP BANNER -->
<section class="container-fluid bg-custom section-top">
    <div class="container pt-3"> 
      <div class="row">
      <?php if ( have_posts() ): while (have_posts()): the_post(); ?>
        <div class="col-12 col-md-6">
          <h1 class="text-left text-uppercase display-1-custom">
          5 years. 12 Tutors. 120 visitors every week. More than 25 workshops a week. Kids, carers, Adults, special needs, artists, an entire community expressing through art.
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

<!-- SECTION 2 -->
<section class="container my-5">
  <div class="row img">
    <div class="col img-fluid">
    <figure class="wp-block-image size-large is-resized"><img src="http://localhost/module4/wp-art/wp-content/uploads/2020/06/senjuti-kundu-JfolIjRnveY-unsplash-680x1024.jpg" alt="" class="wp-image-99" width="318" height="479"/></figure>
    </div>
    <div class="col">
      <h2 class="text-uppercase mb-3">Story</h2>
      <p class="text-justify">Wilds birds art workshop started 5 years ago in our house in the center of wellington. I’m Lucy a fan of all sort of crafts and art and my husband is good with numbers and music. Our Doughter Soph was a girl with special needs and we thought we needed a space for her to be able to feel involved and express herself through art. It was also our way to engage with her iin something we both enjoyed as a family. We received all Sophie’s friends with all sort of disabilities, we created a beautiful networking with their carers and family, so we thought in taking one step further and make our idea less specific and more inclusive. 

        After seen the need of this type of organizations we decided to move to the center of Wellington back in 2015 with the help of friends and a couple of foundraising we organised with the community. After few months our dream come true and we started to see new people coming over: reired, unenployed, disabilities, families, kids, artists and students. Inclusiveness.

        Apart of art our doughter really enjoyed the sound of birds, so as she passed away, with her carers and closed friends we called ourselves “the wild birds” recalling her fightful spirit to stay in this world with us for such a long time. 

        Now Wild birds is a public non-profit organisation available to all the Wellington community. For that reason your support is very important to all of us.</p>
    </div>
  </div>
  <figure class="wp-block-image size-large is-resized"><img src="http://localhost/module4/wp-art/wp-content/uploads/2020/06/Screen-Shot-2020-06-18-at-11.11.48-AM-1024x325.png" alt="" class="wp-image-100" width="1440" height="454"/></figure>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>