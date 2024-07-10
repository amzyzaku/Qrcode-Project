<?php $__env->startSection('content'); ?>
<!-- Hero -->
<div class="d-flex justify-content-center align-items-center p-5 text-center bg-image" style="
    background-image: url('<?php echo e(asset('images/hero_image.png')); ?>');
    height: 600px;
  ">
  <div class="mask">
    <div class="d-flex justify-content-center align-items-center h-100 w-200">
      <div class="text-white ">
        <h1 class="mb-3 fs-1" style="font-weight: 600;">TIRED OF SEEING YOUR USED <span style="color: green;">BOOKS</span>?</h1>
       <h4 class="mb-3" id="navbarNavDropdown">Donating Used Books Or Selling Them Is A Wonderful Way Of Helping Others Reach Edifying Books. Here We Connect People Through Books</h4>
         
      </div>
    </div>
  </div>
</div>
<!-- Hero -->

<form class="d-flex mt-5 ms-5 me-5 border border-dark">
  <input class="form-control border-0 rounded-0 text-center" type="search" placeholder="Search A Book Title, Author Or Subject" aria-label="Search">
</form>

<ul class="nav nav-tabs mt-5 mb-5 justify-content-evenly">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">All Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Donate A Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Request For A Donation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link">Sell A Book</a>
  </li>
</ul>

<h2 class="ms-5 mb-5">STORIES</h2>
<div class="d-flex justify-content-evenly mb-5">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>

<h2 class="ms-5 mb-5">STORIES</h2>
<div class="d-flex justify-content-evenly mb-5">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>

<h2 class="ms-5 mb-5">STORIES</h2>
<div class="d-flex justify-content-evenly mb-5">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('images/book image.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pagelayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bookfund\resources\views/landing.blade.php ENDPATH**/ ?>