<h3 class="cent">更新網站標題圖片</h3>
<hr>
<form action="/api/update/title/<?php echo e($cid); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
  <table style="margin:auto;width:550px">
    <tr>
      <td style="text-align:right">標題區圖片</td>
      <td><input type="file" name="file" ></td>
    </tr>
  </table>
  <div class="cent">
    <input type="submit" value="更新">
    <input type="reset" value="重置">
  </div>
</form><?php /**PATH F:\site01\resources\views/admin/update/title.blade.php ENDPATH**/ ?>