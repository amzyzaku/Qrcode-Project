<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEKWUTHRIF.com</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FEF9FF !important;
            margin: 0;
            padding: 0;
        }
    </style>

</head>
<body class="">
    <nav class="navbar navbar-expand-lg w-100 position-fixed navbar-light" style="z-index: 9999;  background-color: #FEF9FF;">
        <div class="container-fluid ">
            <a class="navbar-brand ms-3" href="#"><img class="img-fluid" style="width: 150px;" src="<?php echo e(asset('images/Group_116.svg')); ?>" class="card-img-top" alt="..."></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse ms-3 me-3" id="navbarNavDropdown">
            <ul class="navbar-nav fs-5">
                <li class="nav-item" style="width: 100px">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item " style="width: 100px">
                    <a class="nav-link .item-nav" href="test">About Us</a>
                </li>
                <li class="nav-item" style="width: 100px">
                    <a class="nav-link" href="#">Security</a>
                </li>
                <li class="nav-item" style="width: 100px">
                    <a class="nav-link" href="#">Log In</a>
                </li>
                <li class="nav-item">
                    <div class="d-flex justify-content-evenly align-items-center" style="background-color: #DBA159; color:#fff;  height: 37px!important; width:117px; border-radius:12px; text-align:center;">
                        <a class="nav-link" style=" color:#fff;" href="#">Register</a>
                    </div>
                </li>
            </ul>
        </div>
      </nav>
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\MekwuThrif\resources\views/layouts/pagelayouts.blade.php ENDPATH**/ ?>