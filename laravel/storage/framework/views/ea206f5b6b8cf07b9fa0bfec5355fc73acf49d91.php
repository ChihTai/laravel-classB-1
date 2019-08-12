<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post" action="/api/edit/title">
    <?php echo csrf_field(); ?>
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">網站標題</td>
                    <td width="23%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                <tr>
                    <td width="45%"><img src="<?php echo e(asset('storage/img/'.$row['file'])); ?>" style="width:300px;height:30px"></td>
                    <td width="23%"><input type="text" name="title[]" value="<?php echo e($row['title']); ?>"></td>
                    <td width="7%"><input type="radio" name="sh" value="<?php echo e($row['id']); ?>" <?php echo e($row['sh']); ?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?php echo e($row['id']); ?>"></td>
                    <input type="hidden" name="id[]" value="<?php echo e($row['id']); ?>">
                    <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','/admin/update/title/<?php echo e($row['id']); ?>')"></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                    onclick="op('#cover','#cvr','/admin/add/title')" value="新增網站標題圖片">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
<?php /**PATH F:\site01\resources\views/admin/title.blade.php ENDPATH**/ ?>