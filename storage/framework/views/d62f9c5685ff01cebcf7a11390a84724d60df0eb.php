<html>
<head>
    <title>Receipt_<?php echo e($pr->ref_no.'_'.$sr->user->name); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/receipt.css')); ?>"/>
</head>
<body>
<div class="container">
    <div id="print" xmlns:margin-top="http://www.w3.org/1999/xhtml">
        
        <table width="100%">
            <tr>

                <td>
                    <strong><span
                                style="color: #1b0c80; font-size: 25px;"><?php echo e(strtoupper(Qs::getSetting('system_name'))); ?></span></strong><br/>
                    
                    <strong><span
                                style="color: #000; font-size: 15px;"><i><?php echo e(ucwords($s['address'])); ?></i></span></strong>
                    <br/> <br/>

                     <span style="color: #000; font-weight: bold; font-size: 25px;"> PAYMENT RECEIPT</span>
                </td>
            </tr>
        </table>

        
        <div style="position: relative;  text-align: center; ">
            <img src="<?php echo e($s['logo']); ?>"
                 style="max-width: 500px; max-height:600px; margin-top: 60px; position:absolute ; opacity: 0.1; margin-left: auto;margin-right: auto; left: 0; right: 0;"/>
        </div>

        
    <div class="bold arial" style="text-align: center; float:right; width: 200px; padding: 5px; margin-right:30px">
        <div style="padding: 10px 20px; width: 200px; background-color: lightcyan;">
            <span  style="font-size: 16px;">Receipt Reference No.</span>
        </div>
        <div  style="padding: 10px 20px; width: 200px; background-color: lightyellow;">
            <span  style="font-size: 25px;"><?php echo e($pr->ref_no); ?></span>
        </div>
    </div>

        <div style="clear: both"></div>

        
        <div style="margin-top:5px; display: block; background-color: rgba(92, 172, 237, 0.12); padding: 5px; ">
            <span style="font-weight:bold; font-size: 20px; color: #000; padding-left: 10px">STUDENT INFORMATION</span>
        </div>

        
        <div style="margin: 15px;">
            <img style="width: 100px; height: 100px; float: left;" src="<?php echo e($sr->user->photo); ?>" alt="...">
        </div>

       <div style="float: left; margin-left: 20px">
           <table style="font-size: 16px" class="td-left" cellspacing="5" cellpadding="5">
               <tr>
                   <td class="bold">NAME:</td>
                   <td><?php echo e($sr->user->name); ?></td>
               </tr>
               <tr>
                   <td class="bold">ADM_NO:</td>
                   <td><?php echo e($sr->adm_no); ?></td>
               </tr>
               <tr>
                   <td class="bold">CLASS:</td>
                   <td><?php echo e($sr->my_class->name); ?></td>
               </tr>
           </table>
       </div>
        <div class="clear"></div>

        
        <div style="margin-top:5px; display: block; background-color: rgba(92, 172, 237, 0.12); padding: 5px; ">
            <span style="font-weight:bold; font-size: 20px; color: #000; padding-left: 10px">PAYMENT INFORMATION</span>
        </div>

        <table class="td-left" style="font-size: 16px" cellspacing="2" cellpadding="2">
                <tr>
                    <td class="bold">REFERENCE:</td>
                    <td><?php echo e($payment->ref_no); ?></td>
                    <td class="bold">TITLE:</td>
                    <td><?php echo e($payment->title); ?></td>
                </tr>
                <tr>
                    <td class="bold">AMOUNT:</td>
                    <td><?php echo e($payment->amount); ?></td>
                    <td class="bold">DESCRIPTION:</td>
                    <td><?php echo e($payment->description); ?></td>
                </tr>
            </table>

        
        <div style="margin-top:5px; display: block; background-color: rgba(92, 172, 237, 0.12); padding: 5px; ">
            <span style="font-weight:bold; font-size: 20px; color: #000; padding-left: 10px">DESCRIPTION</span>
        </div>

        <table class="td-left" style="font-size: 16px" width="100%" cellspacing="2" cellpadding="2">
           <thead>
           <tr>
               <td class="bold">Date</td>
               <td class="bold">Amount Paid <del style="text-decoration-style: double">N</del></td>
               <td class="bold">Balance <del style="text-decoration-style: double">N</del></td>
           </tr>
           </thead>
            <tbody>
            <?php $__currentLoopData = $receipts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(date('D\, j F\, Y', strtotime($r->created_at))); ?></td>
                    <td><?php echo e($r->amt_paid); ?></td>
                    <td><?php echo e($r->balance); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <hr>
        <div class="bold arial" style="text-align: center; float:right; width: 200px; padding: 5px; margin-right:30px">
            <div style="padding: 10px 20px; width: 200px; background-color: lightcyan;">
                <span  style="font-size: 16px;"><?php echo e($pr->paid ? 'PAYMENT STATUS' : 'TOTAL DUE'); ?></span>
            </div>
            <div  style="padding: 10px 20px; width: 200px; background-color: lightyellow;">
                <span  style="font-size: 25px;"><?php echo e($pr->paid ? 'CLEARED' : $pr->balance); ?></span>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script>
window.print();
</script>
</body>
</html>
<?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/payments/receipt.blade.php ENDPATH**/ ?>