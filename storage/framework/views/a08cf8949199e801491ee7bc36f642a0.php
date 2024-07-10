<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title>Bootstrap test components</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    
</head>
<body>
    <div class="container-fluid">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
                </div>
                <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
                </div>
                <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
                </div>
                <span class="badge bg-primary rounded-pill">14</span>
            </li>
        </ol>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Bookfund1\resources\views/bootstrap5.blade.php ENDPATH**/ ?>