<?php $__env->startSection('content'); ?>
<!-- Hero -->
<div class="d-flex justify-content-center align-items-center p-5 text-center bg-image" style="
    background-image: url('<?php echo e(asset('images/hero_image.png')); ?>');
    height: 590px;
  ">
  <div class="mask">
    <div class="d-flex justify-content-center align-items-center h-100 w-200">
      <div class="text-white">
        <h1 class="mb-3 fs-1" style="font-weight: 600;">TIRED OF SEEING YOUR USED <span style="color: green;">BOOKS</span>?</h1>
       <h4 class="mb-3 collapse navbar-collapse" id="navbarNavDropdown">Donating Used Books Or Selling Them Is A Wonderful Way Of Helping Others Reach Edifying Books. Here We Connect People Through Books</h4>
         
      </div>
    </div>
  </div>
</div>
<!-- Hero -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pagelayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bookfund1\resources\views/landing.blade.php ENDPATH**/ ?>