<form method="post" action="<?php echo e(route('students.promote', [$fc, $fs, $tc, $ts])); ?>">
    <?php echo csrf_field(); ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Current Session</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $students->sortBy('user.name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><img class="rounded-circle" style="height: 30px; width: 30px;" src="<?php echo e($sr->user->photo); ?>" alt="img"></td>
                <td><?php echo e($sr->user->name); ?></td>
                <td><?php echo e($sr->session); ?></td>
                <td>
                    <select class="form-control select" name="p-<?php echo e($sr->id); ?>" id="p-<?php echo e($sr->id); ?>">
                        <option value="P">Promote</option>
                        <option value="D">Don't Promote</option>
                        <option value="G">Graduated</option>
                    </select>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="text-center mt-3">
        <button class="btn btn-success"><i class="icon-stairs-up mr-2"></i> Promote Students</button>
    </div>
</form><?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/students/promotion/promote.blade.php ENDPATH**/ ?>