<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>
<?php the_field('home_page_header_text');?>
<?php the_field('home_page_header_description');?>
<img src="<?php the_field('home_page_header_image');?> ">
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>