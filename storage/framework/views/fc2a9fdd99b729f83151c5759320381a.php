<?php $__env->startSection('content'); ?>


<div class="bg-light p-4" style="border-radius: 13px;">
<table id="scroll-horizontal-datatable" class="table w-100 nowrap">


    <thead>
        <tr>
            <th>S/N</th>
            <th>Unused Lazy Codes</th>
            <th>Used Lazy Codes</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($codes as $code) {
        ?>
                <tr>
                    <td> <?php echo e($code->id); ?> </td>
                    <td><?php echo e($code->id); ?> </td>
                    <td><?php echo e($code->id); ?> </td>
                </tr>
        <?php
            }
        ?>

    </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mylayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LazyClassRep\resources\views/theLazyclassRep.blade.php ENDPATH**/ ?>