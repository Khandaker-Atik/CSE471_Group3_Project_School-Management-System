<div>
    
    <div style="float: left">
        <br>
        <strong style="text-decoration: underline;">KEY</strong> <br>
        <span>5 - Excellent</span> <br>
        <span>4 - Very Good</span> <br>
        <span>3 - Good</span> <br>
        <span>2 - Fair</span> <br>
        <span>1 - Poor</span> <br>
    </div>

    <table align="left" style="width:40%; border-collapse:collapse; border: 1px solid #000; margin:10px 20px;" border="1">
        <thead>
        <tr>
            <td><strong>AFFECTIVE TRAITS</strong></td>
            <td><strong>RATING</strong></td>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $skills->where('skill_type', 'AF'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $af): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($af->name); ?></td>
                <td><?php echo e($exr->af ? explode(',', $exr->af)[$loop->index] : ''); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <table align="left" style="width:35%; border-collapse:collapse;border: 1px solid #000;  margin: 10px 20px;" border="1">
        <thead>
        <tr>
            <td><strong>PSYCHOMOTOR</strong></td>
            <td><strong>RATING</strong></td>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $skills->where('skill_type', 'PS'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($ps->name); ?></td>
                <td><?php echo e($exr->ps ? explode(',', $exr->ps)[$loop->index] : ''); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>
<?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/marks/print/skills.blade.php ENDPATH**/ ?>