		<!--header--->
<?php $__env->startSection("content"); ?>		
        <div id="ms">
<!--選單-->
<?php echo $__env->make("front.menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php switch($main):
  case ("news"): ?>
    <?php echo $__env->make("front.news", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php case ("login"): ?>
    <?php echo $__env->make("front.login", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php default: ?>
    <?php echo $__env->make("front.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
<?php endswitch; ?>
  
<?php echo $__env->make("front.image", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div style="clear:both;"></div>
<?php $__env->stopSection(); ?>				
	<!--footer--->

<?php echo $__env->make("layout.base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\site01\resources\views/index.blade.php ENDPATH**/ ?>