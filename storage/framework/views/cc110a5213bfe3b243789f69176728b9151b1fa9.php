<form class="ajax-update" action="<?php echo e(route('marks.update', [$exam_id, $my_class_id, $section_id, $subject_id])); ?>" method="post">
    <?php echo csrf_field(); ?> <?php echo method_field('put'); ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>ADM_NO</th>
            <th>1ST CA (20)</th>
            <th>2ND CA (20)</th>
            <th>EXAM (60)</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $marks->sortBy('user.name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($mk->user->name); ?> </td>
                <td><?php echo e($mk->user->student_record->adm_no); ?></td>


                <td><input title="1ST CA" min="1" max="20" class="text-center" name="t1_<?php echo e($mk->id); ?>" value="<?php echo e($mk->t1); ?>" type="number"></td>
                <td><input title="2ND CA" min="1" max="20" class="text-center" name="t2_<?php echo e($mk->id); ?>" value="<?php echo e($mk->t2); ?>" type="number"></td>
                <td><input title="EXAM" min="1" max="60" class="text-center" name="exm_<?php echo e($mk->id); ?>" value="<?php echo e($mk->exm); ?>" type="number"></td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="text-center mt-2">
        <button type="submit" class="btn btn-primary">Update Marks <i class="icon-paperplane ml-2"></i></button>
    </div>
</form>
<?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/marks/edit.blade.php ENDPATH**/ ?>