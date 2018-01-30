<?php

/** Template Name: Boston Sessions*/

get_header(); ?>

<section class="container">

<a href="/boston-home">« Back to Boston Home</a>

<div class="spacing">&nbsp;</div>

<center><h1>Boston Sessions</h1></center>

<?php
    $boston = new WP_Query(array(
    'page_id' => 1478,
    ));
    ?>

<?php while ($boston->have_posts()) : $boston->the_post(); ?>

<?php if( get_field('coming_soon') ): ?>
	<center><strong>Check back often - more sessions coming soon!</strong></center>
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
    $loop_sessions = new WP_Query(array(
    'post_type' => 'boston_session',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
    ));
    ?>

<?php
$current_post=1;
$grids=2;

while ($loop_sessions->have_posts()) : $loop_sessions->the_post();
$current_post = $loop_sessions->current_post + 1;
?>

<?php
    //-- output start elements
    if( $current_post % 2 > 0 ): ?>

   <div class="row speaker-two-up">
    <?php endif; ?>

    <div class="speaker-one-up col-md-6 col-xs-12">

        <div class="row bio">
          <div class="col-md-12 col-xs-12">
            <br />
            <a href="<?php echo the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

            <?php /*
              <?php
              $terms = get_the_terms( $post->ID, 'location' );
              if ( $terms && ! is_wp_error( $terms ) ) :
                $locations = array();
                  foreach ( $terms as $term ) {
                    $locations[] = $term->name;
                  }
              ?>

              <?php
              $location = join( ", ", $locations ); ?>
              Location: <?php echo $location; ?><br />
              <?php endif; ?> */ ?>

            <?php // Display formatted date ?>
            <?php $format = "F jS, Y";?>
            <?php if( $datestamp = get_field('boston_date') ): ?>
              <?php echo date_i18n( $format, $datestamp ); ?>
              <br />
              <?php endif; ?>

            <?php // Display formatted time ?>
            <?php $timeformat = "g:i A"; ?>
            <?php $timeplushour = get_field('boston_date') + 3600; ?>
            <?php if( $timestamp = get_field('boston_date') ): ?>
              <?php echo date_i18n( $timeformat, $timestamp ) ?> - <?php echo date_i18n( $timeformat, $timeplushour); ?>
              <br />
              <br />
            <?php endif; ?>

            <?php $excerpt = get_the_content();
                  $permalink = get_permalink($post->ID); ?>
              <p><?php echo wpse_custom_excerpts($excerpt, 100, $permalink); ?></p>
          </div>
        </div>

            <?php $pics = get_posts(array(
              'post_type' => 'session',
              'posts_per_page' => 5,
              'meta_query' => array(
                array(
                  'key' => 'speaker_photo', // name of custom field
                  'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                  'compare' => 'LIKE'
                )
              )
            )); ?>

            <?php $pics = get_field('boston_speaker_photo');
              if ($pics): ?>
                <?php foreach ($pics as $post): ?>
                  <?php setup_postdata($post); ?>

                  <div class="row session">
                    <div class="col-md-3 col-xs-3">
                      <a href="<?php the_permalink(); ?>">
                        <div class="circular-image-archive">
                          <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                        </div>
                      </a>
                    </div>

                  <div class="col-md-9 col-xs-9">
                    <h3><a href="<?php the_permalink(); ?>">
                    <?php echo the_title(); ?></a></h3>
                    <div class="speaker-job-title">
                      <?php echo the_field('boston_job_title'); ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
              </div>
            <?php endforeach; ?>
            <?php endif; ?>
    </div>

    <?php if( $current_post % 2 == 0 ): ?>
  </div>
    <?php endif; ?>

  <?php $current_post++;
endwhile; ?>

</section>

<?php get_footer(); ?>
