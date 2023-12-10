
<?php $__env->startSection('page_title', 'Select Exam Year'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title"><i class="icon-alarm mr-2"></i> Select Exam Year</h5>
            <?php echo Qs::getPanelOptions(); ?>

        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form method="post" action="<?php echo e(route('marks.year_select', $student_id)); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="year" class="font-weight-bold col-form-label-lg">Select Exam Year:</label>
                            <select required id="year" name="year" data-placeholder="Select Exam Year" class="form-control select select-lg">
                                <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($y->year); ?>"><?php echo e($y->year); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary btn-lg">Submit <i class="icon-paperplane ml-2"></i></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHAND\Desktop\Github\CSE471_Group3_Project_School-Management-System\resources\views/pages/support_team/marks/select_year.blade.php ENDPATH**/ ?>