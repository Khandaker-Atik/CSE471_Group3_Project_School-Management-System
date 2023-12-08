<html>
<head>
    <title>TimeTable - <?php echo e($ttr->name.' - '.$ttr->year); ?></title>
    <style>
        @media  print {

            td, th {
                padding: 20px 5px;
                text-align: center;
                font-size: 14px;
            }

            @page  {
                size: landscape;   /* auto is the initial value */
                margin: 0;  /* this affects the margin in the printer settings */
            }

            html {
                background-color: #FFFFFF;
                margin: 0; /* this affects the margin on the html before sending to printer */
            }

            body {
                margin: 0 10mm; /* margin you want for the content */
            }
        }

        td {
            text-align: center;
        }

    </style>
</head>
<body>
<div class="container">
    <div id="print" xmlns:margin-top="http://www.w3.org/1999/xhtml">
        
        <table width="100%">
            <tr>
                <td >
                    <strong><span style="color: #1b0c80; font-size: 25px;"> BRAC SCHOOL</span></strong><br/>
                    
                    <strong><span style="color: #000; font-size: 15px;"><i><?php echo e(ucwords($s['address'])); ?></i></span></strong><br/>
                    <strong><span style="color: #000; text-decoration: underline; font-size: 15px;"><i><?php echo e(config('app.url')); ?>/i></span></strong>
                    <br /> <br />
                    <strong><span style="color: #000; font-size: 15px;"> TIMETABLE FOR <?php echo e(strtoupper($my_class->name. ' ('.$ttr->year.')' )); ?>

                    </span></strong>
                </td>
            </tr>
        </table>

        
        <div style="position: relative;  text-align: center; ">
            <img src="<?php echo e($s['logo']); ?>"
                 style="max-width: 500px; max-height:600px; margin-top: 60px; position:absolute ; opacity: 0.2; margin-left: auto;margin-right: auto; left: 0; right: 0;" />
        </div>

        
        <table cellpadding="20" style="width:100%; border-collapse:collapse; border: 1px solid #000; margin: 10px auto;" border="1">
            <thead>
            <tr>
                <th rowspan="2">Time <i class="icon-arrow-right7 ml-2"></i> <br> Date<i class="icon-arrow-down7 ml-2"></i>
                </th>
                <?php $__currentLoopData = $time_slots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th rowspan="2"><?php echo e($tms->time_from); ?> <br>
                        <?php echo e($tms->time_to); ?>

                    </th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php if($ttr->exam_id): ?>
                        <td><strong><?php echo e(date('l', strtotime($day))); ?> <br> <?php echo e(date('d/m/Y', strtotime($day))); ?> </strong></td>
                    <?php else: ?>
                        <td><strong><?php echo e($day); ?></strong></td>
                    <?php endif; ?>
                    <?php $__currentLoopData = $d_time->where('day', $day); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($dt['subject']); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/timetables/print.blade.php ENDPATH**/ ?>