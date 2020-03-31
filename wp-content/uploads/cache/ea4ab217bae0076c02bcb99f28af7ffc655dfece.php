<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php
  $args = array(
    'post_type' => 'realisation',
    'posts_per_page' => 10 );

    $loop = new WP_Query ( $args );
    ?>
  <div id="gridProjects">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="blocProject">
        <img src=<?php the_field('image_realisation');?> alt="">
        <div class="projectContent"> 
          <div class="wrap">
            <div class="nameProject">
              <?php the_field('nom_realisation'); ?>
            </div>
            <div class="descriptionProject">
              <?php the_field('description_realisation');?>
            </div>
          </div>
         
        </div>
        
          
      </div>
    
    
    <?php endwhile ?> 
  </div>
  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>