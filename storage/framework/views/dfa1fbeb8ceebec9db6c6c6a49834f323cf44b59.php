
<?php $__env->startSection('page_title', 'Manage Marks'); ?>
<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-bold">Fill The Form To Manage Marks</h6>
            <?php echo Qs::getPanelOptions(); ?>

        </div>

        <div class="card-body">
            <?php echo $__env->make('pages.support_team.marks.selector', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="card">

        <div class="card-header">
            <div class="row">
                <div class="col-md-4"><h6 class="card-title"><strong>Subject: </strong> <?php echo e($m->subject->name); ?></h6></div>
                <div class="col-md-4"><h6 class="card-title"><strong>Class: </strong> <?php echo e($m->my_class->name.' '.$m->section->name); ?></h6></div>
                <div class="col-md-4"><h6 class="card-title"><strong>Exam: </strong> <?php echo e($m->exam->name.' - '.$m->year); ?></h6></div>
            </div>
        </div>

        <div class="card-body">
            <?php echo $__env->make('pages.support_team.marks.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        </div>
    </div>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/marks/manage.blade.php ENDPATH**/ ?>