<?php

/** Template Name: Philly Speakers */

get_header(); ?>

<section class="container">

  <a href="/philadelphia">« Back to Philadelphia Home</a>

  <div class="spacing">&nbsp;</div>


  <center><h1>Philadelphia Speakers</h1></center>

  <?php
      $boston = new WP_Query(array(
      'page_id' => 40,
      ));
      ?>

  <?php while ($boston->have_posts()) : $boston->the_post(); ?>

  <?php if( get_field('coming_soon') ): ?>
  	<center><strong>Check back often - more speakers coming soon!</strong></center>
      <br />
  <?php endif; ?>

  <center>
    <?php if( get_field('city_schedule_button_url') ): ?>

        <a target="_blank" href="<?php the_field('city_schedule_button_url')?>"
          class="btn btn-primary btn-header">View Schedule</a>

    <?php endif; ?>

    <?php if( get_field('city_register_button_url') ): ?>

        <a target="_blank" href="<?php the_field('city_register_button_url')?>"
          class="btn btn-cta btn-header" style="background-color:red;">Register Now!</a>

    <?php endif; ?>
  </center>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php
    $loop_speakers = new WP_Query(array(
    'post_type' => 'philly_speaker',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
    ));
    ?>

<?php
$current_post=1;
$grids=2;

while ($loop_speakers->have_posts()) : $loop_speakers->the_post();
$current_post = $loop_speakers->current_post + 1;
?>

<?php
    //-- output start elements
    if( $current_post % 2 > 0 ): ?>

   <div class="row speaker-two-up">
    <?php endif; ?>

    <div class="speaker-one-up col-md-6 col-xs-12">

        <div class="row speaker">

          <div class="col-md-2 col-xs-3">
                <a href="<?php the_permalink(); ?>">
                  <div class="circular-image-archive">
                    <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                  </div>
          </div>

          <div class="col-md-10 col-xs-9">
            <a href="<?php the_permalink() ?>">
              <h3 class="name"><?php the_title(); ?></h3></a>
              <div class="speaker-job-title"><?php the_field('philly_job_title'); ?></div>
              <?php
              $excerpt = get_the_excerpt();
              $permalink = get_permalink();
              $talks = get_field('philly_session_relationship');
                if ($talks): ?>
                    <?php foreach ($talks as $post): ?>
                      <?php setup_postdata($post); ?>
                        <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?><br /></a>
                    <?php endforeach; ?>
                <?php endif; ?>
          </div>

        </div>

          <div class="row bio">

            <div class="col-md-12 col-xs-12">
              <p><?php echo wpse_custom_excerpts($excerpt, 40, $permalink); ?></p>
            </div>

          </div>

      </div>

    <?php if( $current_post % 2 == 0 ): ?>
  </div>
    <?php endif; ?>

  <?php $current_post++;
endwhile; ?>

</section>

<?php get_footer(); ?>
