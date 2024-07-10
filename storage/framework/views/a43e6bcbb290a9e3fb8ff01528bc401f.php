<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookFund.com</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand fs-2 ms-5" style="font-weight: 600;" href="#">BOOKFUND</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse ms-3 me-3" id="navbarNavDropdown">
            <ul class="navbar-nav fs-5">
                <li class="nav-item" style="width: 100px">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item" style="width: 100px">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item" style="width: 100px">
                    <a class="nav-link" href="#">Sign Up</a>
                </li>
                <li class="nav-item" style="width: 100px">
                    <a class="nav-link" href="#">Sign In</a>
                </li>
            </ul>
        </div>
      </nav>
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Bookfund1\resources\views/layouts/pagelayouts.blade.php ENDPATH**/ ?>