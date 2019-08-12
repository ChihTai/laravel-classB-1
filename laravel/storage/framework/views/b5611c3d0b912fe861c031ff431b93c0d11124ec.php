
<?php $__env->startSection("content"); ?>
<div id="ms">
<?php echo $__env->make("admin.menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="di"
        style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
        <!--正中央-->
    <?php echo $__env->make("admin.headbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make("admin.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<div style="clear:both;"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\site01\resources\views/admin.blade.php ENDPATH**/ ?>