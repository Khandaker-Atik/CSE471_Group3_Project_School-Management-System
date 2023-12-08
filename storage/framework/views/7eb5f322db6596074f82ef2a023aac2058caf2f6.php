<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header header-elements-inline bg-danger">
                <h6 class="card-title font-weight-bold">AFFECTIVE TRAITS</h6>
                <?php echo Qs::getPanelOptions(); ?>

            </div>

            <div class="card-body collapse">
                <form class="ajax-update" method="post" action="<?php echo e(route('marks.skills_update', ['AF', $exr->id])); ?>">
                    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
                    <?php $__currentLoopData = $skills->where('skill_type', 'AF'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $af): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group row">
                            <label for="af" class="col-lg-6 col-form-label font-weight-semibold"><?php echo e($af->name); ?></label>
                            <div class="col-lg-6">
                                <select data-placeholder="Select" name="af[]" id="af" class="form-control select">
                                    <option value=""></option>
                                    <?php for($i=1; $i<=5; $i++): ?>
                                        <option <?php echo e($exr->af && explode(',', $exr->af)[$loop->index] == $i ? 'selected' : ''); ?> value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header header-elements-inline bg-success">
                <h6 class="card-title font-weight-bold">PSYCHOMOTOR SKILLS</h6>
                <?php echo Qs::getPanelOptions(); ?>

            </div>

            <div class="card-body collapse">
                <form class="ajax-update" method="post" action="<?php echo e(route('marks.skills_update', ['PS', $exr->id])); ?>">
                    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
                    <?php $__currentLoopData = $skills->where('skill_type', 'PS'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group row">
                            <label for="ps" class="col-lg-6 col-form-label font-weight-semibold"><?php echo e($ps->name); ?></label>
                            <div class="col-lg-6">
                                <select data-placeholder="Select" name="ps[]" id="ps" class="form-control select">
                                    <option value=""></option>
                                    <?php for($i=1; $i<=5; $i++): ?>
                                        <option <?php echo e($exr->ps && explode(',', $exr->ps)[$loop->index] == $i ? 'selected' : ''); ?> value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/marks/show/skills.blade.php ENDPATH**/ ?>