
<?php $__env->startSection('page_title', 'Edit Exam - '.$ex->name. ' ('.$ex->year.')'); ?>
<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Exam</h6>
            <?php echo Qs::getPanelOptions(); ?>

        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="<?php echo e(route('exams.update', $ex->id)); ?>">
                        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="name" value="<?php echo e($ex->name); ?>" required type="text" class="form-control" placeholder="Name of Exam">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="term" class="col-lg-3 col-form-label font-weight-semibold">Term</label>
                            <div class="col-lg-9">
                                <select data-placeholder="Select Teacher" class="form-control select-search" name="term" id="term">
                                    <option <?php echo e($ex->term == 1 ? 'selected' : ''); ?> value="1">First Term</option>
                                    <option <?php echo e($ex->term == 2 ? 'selected' : ''); ?> value="2">Second Term</option>
                                    <option <?php echo e($ex->term == 3 ? 'selected' : ''); ?> value="3">Third Term</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/exams/edit.blade.php ENDPATH**/ ?>