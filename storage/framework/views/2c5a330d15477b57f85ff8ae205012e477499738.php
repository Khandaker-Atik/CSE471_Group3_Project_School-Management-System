
<?php $__env->startSection('page_title', 'Edit TimeTable Record'); ?>
<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit TimeTable Record</h6>
            <?php echo Qs::getPanelOptions(); ?>

        </div>

        <div class="card-body">
            <div class="col-md-8">
                <form class="ajax-update" method="post" action="<?php echo e(route('ttr.update', $ttr->id)); ?>">
                    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="name" value="<?php echo e($ttr->name); ?>" required type="text" class="form-control" placeholder="Name of TimeTable">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="my_class_id" class="col-lg-3 col-form-label font-weight-semibold">Class <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select required data-placeholder="Select Class" class="form-control select" name="my_class_id" id="my_class_id">
                                <?php $__currentLoopData = $my_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($ttr->my_class_id == $mc->id ? 'selected' : ''); ?> value="<?php echo e($mc->id); ?>"><?php echo e($mc->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exam_id" class="col-lg-3 col-form-label font-weight-semibold">Type (Class or Exam)</label>
                        <div class="col-lg-9">
                            <select class="select form-control" name="exam_id" id="exam_id">
                                <option value="">Class Timetable</option>
                                <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($ttr->exam_id == $ex->id ? 'selected' : ''); ?> value="<?php echo e($ex->id); ?>"><?php echo e($ex->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>


                    <div class="text-right">
                        <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>

            </div>

        </div>
    </div>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/timetables/edit.blade.php ENDPATH**/ ?>