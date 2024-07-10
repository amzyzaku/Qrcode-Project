<?php $__env->startSection('content'); ?>

    <div><h2 class="text-center" style="margin-top: 100px; font-weight:700 !important; ">THE LAZY CLASS REP</h2></div>
    <form method="POST" action="submitedlazy">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Full Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Registration Number</label>
            <input type="text" name="reg_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Unique Lazzyness Code</label>
          <input type="text" name="unique_lazy_code" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Click to confirm you lazy</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mylayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LazyClassRep\resources\views/reallyLazy.blade.php ENDPATH**/ ?>