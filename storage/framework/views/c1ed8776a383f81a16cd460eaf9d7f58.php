<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qrcode System</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

</head>
<body>
  <main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                <span class="fs-4">ATBU_ExamsCenter.com</span>
            </a>
        </header>
    </div>

    <div class="container pages">
        <div>

            <?php $__errorArgs = ['error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php $__errorArgs = ['success'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-success"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      <div class="row gy-5">
        <div class="col">
          <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Students</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Dashboard</h6>
              <p class="card-text">Enter your dashboard to register your courses and your details</p>
              <?php if(auth()->guard()->check()): ?>
                <a href="studentPortal" class="card-link">Dashboard</a>
            <?php else: ?>
                <a href="students" class="card-link">Log In</a>
            <?php endif; ?>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Teachers</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Dashboard</h6>
              <p class="card-text">Enter your dashboard to pick courses you'll take for the semester</p>
              <a href="rTeacher" class="card-link">Log In</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Administrator</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Dashboard</h6>
              <p class="card-text">Enter your dashboard to coordinate the schools activites and Exams</p>
              <a href="admin" class="card-link">Log In</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3 gy-5">
        <div class="col">
          <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Exams Officer</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Dashboard</h6>
              <p class="card-text">Enter your dashboard to perform your administrative Exams duties</p>
              <a href="exams" class="card-link">Log In</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Invigilator</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Dashboard</h6>
              <p class="card-text">Scan student codes and view their details getting set for the Paper</p>
              <a href="invigilator" class="card-link">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\LazyClassRep\resources\views/index.blade.php ENDPATH**/ ?>