<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div id="gridProjects">

  <?php $__currentLoopData = $realisations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realisation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <a href= <?php echo e(get_permalink($realisation->ID)); ?>>
      <div class="blocProject">

        <?php echo wp_get_attachment_image($realisation->image_realisation, 'full', '', array("class" => "size-full currently__image")); ?>

        <?php echo e($realisation->nom_realisation); ?>

        <div class="projectContent"> 
          <div class="wrap">
            <div class="nameProject">
              <?php echo e($realisation->nom_realisation); ?>

            </div>
            <div class="descriptionProject">
            <?php echo e($realisation->resume_realisation); ?>   
            <ul class="containerTech">                  
              <?php $__currentLoopData = $realisation->technologies_realisation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="tech"> <p> <?php echo e($rea); ?> </p></li>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
               
              <div class="reabloc">               
              </div>
            </div>
          </div>         
        </div>               
      </div>  
      </a>    
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>