
<table style="width:100%; border-collapse:collapse; ">
    <tbody>
    <tr>
        <td><strong>NAME:</strong> <?php echo e(strtoupper($sr->user->name)); ?></td>
        <td><strong>ADM NO:</strong> <?php echo e($sr->adm_no); ?></td>
        <td><strong>HOUSE:</strong> <?php echo e(strtoupper($sr->house)); ?></td>
        <td><strong>CLASS:</strong> <?php echo e(strtoupper($my_class->name)); ?></td>
    </tr>
    <tr>
        <td><strong>REPORT SHEET FOR</strong> <?php echo strtoupper(Mk::getSuffix($ex->term)); ?> TERM </td>
        <td><strong>ACADEMIC YEAR:</strong> <?php echo e($ex->year); ?></td>
        <td><strong>AGE:</strong> <?php echo e($sr->age ?: ($sr->user->dob ? date_diff(date_create($sr->user->dob), date_create('now'))->y : '-')); ?></td>
    </tr>

    </tbody>
</table>



<table style="width:100%; border-collapse:collapse; border: 1px solid #000; margin: 10px auto;" border="1">
    <thead>
    <tr>
        <th rowspan="2">SUBJECTS</th>
        <th colspan="3">CONTINUOUS ASSESSMENT</th>
        <th rowspan="2">EXAM<br>(60)</th>
        <th rowspan="2">FINAL MARKS <br> (100%)</th>
        <th rowspan="2">GRADE</th>
        <th rowspan="2">SUBJECT <br> POSITION</th>


      

        
    </tr>
    <tr>
        <th>CA1(20)</th>
        <th>CA2(20)</th>
        <th>TOTAL(40)</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td style="font-weight: bold"><?php echo e($sub->name); ?></td>
            <?php $__currentLoopData = $marks->where('subject_id', $sub->id)->where('exam_id', $ex->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($mk->t1 ?: '-'); ?></td>
                <td><?php echo e($mk->t2 ?: '-'); ?></td>
                <td><?php echo e($mk->tca ?: '-'); ?></td>
                <td><?php echo e($mk->exm ?: '-'); ?></td>

                <td><?php echo e($mk->$tex ?: '-'); ?></td>
                <td><?php echo e($mk->grade ? $mk->grade->name : '-'); ?></td>
                <td><?php echo ($mk->grade) ? Mk::getSuffix($mk->sub_pos) : '-'; ?></td>


                

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td colspan="3"><strong>TOTAL SCORES OBTAINED: </strong> <?php echo e($exr->total); ?></td>
        <td colspan="3"><strong>FINAL AVERAGE: </strong> <?php echo e($exr->ave); ?></td>
        <td colspan="3"><strong>CLASS AVERAGE: </strong> <?php echo e($exr->class_ave); ?></td>
    </tr>
    </tbody>
</table>
<?php /**PATH C:\Users\KHAND\Desktop\Github\CSE471_Group3_Project_School-Management-System\resources\views/pages/support_team/marks/print/sheet.blade.php ENDPATH**/ ?>