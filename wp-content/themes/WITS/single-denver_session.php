<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="container">

  <div class="row">
    <div class="col-md-12 col-xs-12">
      <h2><?php echo the_title(); ?></h2>
      <?php echo the_content(); ?>
  

<?php $pics = get_posts(array(
  'post_type' => 'raleigh_session',
  'meta_query' => array(
    array(
      'key' => 'speaker_photo', // name of custom field
      'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
      'compare' => 'LIKE'
    )
  )
)); ?>

<?php $pics = get_field('speaker_photo');
  if ($pics): ?>
    <?php foreach ($pics as $post): ?>
      <?php setup_postdata($post); ?>
      <div class="row">
        <div class="col-md-2 col-xs-4">
        <a href="<?php the_permalink(); ?>">
          <div class="circular-image-archive">
            <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
          </div>
        </div>

      <div class="col-md-10 col-xs-8">
        <h2><?php echo the_title(); ?></h2></a>
          <div class="speaker-job-title">
            <?php echo the_field('boston_job_title'); ?>
              <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
