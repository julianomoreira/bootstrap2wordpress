<?php

// optin section
$optin_text         = get_post_meta(7, 'optin_text',true);
$optin_btn_text     = get_post_meta(7,'optin_btn_text',true);

?>

<!-- OPT IN SECTION
================================================== -->
<section id="optin">
<div class="container">
  <div class="row">

    <div class="col-sm-8">
      <p class="lead"><?php echo $optin_text ?></p>
    </div><!-- end col -->

    <div class="col-sm-4">
      <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
        <?php echo $optin_btn_text ?>
      </button>
    </div><!-- end col -->

  </div><!-- row -->
</div><!-- container -->
</section><!-- optin -->
