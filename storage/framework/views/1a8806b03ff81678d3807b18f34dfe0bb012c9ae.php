<html>
<head>
    <title>Tabulation Sheet - <?php echo e($my_class->name.' '.$section->name.' - '.$ex->name.' ('.$year.')'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/print_tabulation.css')); ?>" />
</head>
<body>
<div class="container">
    <div id="print" xmlns:margin-top="http://www.w3.org/1999/xhtml">
        
        <table width="100%">
            <tr>
                

                <td >
                    <strong><span style="color: #1b0c80; font-size: 25px;"><?php echo e(strtoupper(Qs::getSetting('system_name'))); ?></span></strong><br/>
                    
                    <strong><span
                                style="color: #000; font-size: 15px;"><i><?php echo e(ucwords($s['address'])); ?></i></span></strong><br/>
                    <strong><span style="color: #000; font-size: 15px;"> TABULATION SHEET FOR <?php echo e(strtoupper($my_class->name.' '.$section->name.' - '.$ex->name.' ('.$year.')' )); ?>

                    </span></strong>
                </td>
            </tr>
        </table>
        <br/>

        
        <div style="position: relative;  text-align: center; ">
            <img src="<?php echo e($s['logo']); ?>"
                 style="max-width: 500px; max-height:600px; margin-top: 60px; position:absolute ; opacity: 0.2; margin-left: auto;margin-right: auto; left: 0; right: 0;" />
        </div>

        
        <table style="width:100%; border-collapse:collapse; border: 1px solid #000; margin: 10px auto;" border="1">
            <thead>
            <tr>
                <th>#</th>
                <th>NAMES_OF_STUDENTS_IN_CLASS</th>
                <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th rowspan="2"><?php echo e(strtoupper($sub->slug ?: $sub->name)); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
                <th style="color: darkred">Total</th>
                <th style="color: darkblue">Average</th>
                <th style="color: darkgreen">Position</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td style="text-align: center"><?php echo e($s->user->name); ?></td>
                    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($marks->where('student_id', $s->user_id)->where('subject_id', $sub->id)->first()->$tex ?? '-' ?: '-'); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    

                    <td style="color: darkred"><?php echo e($exr->where('student_id', $s->user_id)->first()->total ?: '-'); ?></td>
                    <td style="color: darkblue"><?php echo e($exr->where('student_id', $s->user_id)->first()->ave ?: '-'); ?></td>
                    <td style="color: darkgreen"><?php echo Mk::getSuffix($exr->where('student_id', $s->user_id)->first()->pos) ?: '-'; ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    window.print();
</script>
</body>
</html>
<?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/marks/tabulation/print.blade.php ENDPATH**/ ?>