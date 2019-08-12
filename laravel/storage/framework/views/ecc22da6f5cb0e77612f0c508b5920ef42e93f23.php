<?php switch($main):
  case ("ad"): ?>
    <?php echo $__env->make("admin.ad", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php case ("mvim"): ?>
    <?php echo $__env->make("admin.mvim", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php case ("image"): ?>
   <?php echo $__env->make("admin.image", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php case ("total"): ?>
   <?php echo $__env->make("admin.total", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php case ("bottom"): ?>
   <?php echo $__env->make("admin.bottom", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php case ("news"): ?>
   <?php echo $__env->make("admin.news", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php case ("admin"): ?>
    <?php echo $__env->make("admin.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php case ("menu"): ?>
   <?php echo $__env->make("admin.menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
  <?php default: ?>
   <?php echo $__env->make("admin.title", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php break; ?>
<?php endswitch; ?>
<?php /**PATH F:\site01\resources\views/admin/main.blade.php ENDPATH**/ ?>