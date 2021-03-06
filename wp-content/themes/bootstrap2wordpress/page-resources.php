<?php
/*
  Template Name: Resources Page
*/



get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->id ) );

?>

<!-- FEATURE IMAGE
================================================== -->

<?php if( has_post_thumbnail()) { // check for feaure image ?>

  <section class="feature-image feature-image-default" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <h1><?php the_title(); ?></h1>
  </section>

<?php } else { //fallback image ?>

  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1><?php the_title(); ?></h1>
  </section>

<?php } ?>


  <!-- MAIN CONTENT
================================================== -->
  <div class="container">
    <div class="row" id="primary">

      <div id="content" class="col-sm-12">

        <section class="main-content">

           <?php while ( have_posts() ) : the_post(); ?>

             <?php the_content(); ?>

           <?php endwhile; ?>

          <hr>

          <?php $loop = new WP_Query( array( 'post_type' => 'resource', 'orderby' => 'post_id','order' => 'ASC' ) ) ?>

          <div class="resource-row clearfix">

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

              <?php
                $resource_image       = get_field('resource_image');
                $resource_url         = get_field('resources_url');
                $resource_button_txt  = get_field('button_text');
              ?>

            <div class="resource">

              <img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>" />

              <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>

              <p><?php the_content(); ?></p>

              <?php if (!empty($resource_button_txt)) : ?>
                <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $resource_button_txt; ?></a>
              <?php endif; ?>

            </div>

            <?php endwhile;  ?>

          </div>
        </section>


      </div><!-- content -->

    </div><!-- primary -->
  </div><!-- container -->
