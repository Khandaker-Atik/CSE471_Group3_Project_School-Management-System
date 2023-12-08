<div>
    <table class="td-left" style="border-collapse:collapse;">
        <tbody>
        <tr>
            <td><strong>CLASS TEACHER'S COMMENT:</strong></td>
            <td>  <?php echo e($exr->t_comment ?: str_repeat('__', 40)); ?></td>
        </tr>
        <tr>
            <td><strong>PRINCIPAL'S COMMENT:</strong></td>
            <td>  <?php echo e($exr->p_comment ?: str_repeat('__', 40)); ?></td>
        </tr>
        <tr>
            <td><strong>NEXT TERM BEGINS:</strong></td>
            <td><?php echo e(date('l\, jS F\, Y', strtotime($s['term_begins']))); ?></td>
        </tr>
        <tr>
            <td><strong>NEXT TERM FEES:</strong></td>
            <td><del style="text-decoration-style: double">N</del><?php echo e($s['next_term_fees_'.strtolower($ct)]); ?></td>
        </tr>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Users\KHAND\Desktop\SMS\resources\views/pages/support_team/marks/print/comments.blade.php ENDPATH**/ ?>