<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qrcode System</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
  <main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                <span class="fs-4">Welcome To Teachers Portal</span>
            </a>
            @error('success')
                <div class="alert alert-success">{{ $message }}</div>
            @enderror
        </header>
    </div>

    <div class="container pages">

        <ul class="nav nav-tabs mb-5">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="admin">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addcourses">Add Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addHall">Add New Hall Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="teachers">Register a Staff</a>
            </li>
        </ul>
        <form class="row g-3" action="regTeachers" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="full_name" id="fullname">
                @error('full_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="number" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone_number" id="number" placeholder="09088778878">
                @error('phone_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" name="role" id="role" value="staff" readonly>
                @error('role')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" id="department" placeholder="ex. Mechanical and pro...">
                @error('department')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <h5>Assign One Course to take this semester</h5>
                @foreach ($allCourses as $course)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" value="course1" name="courses[]">
                        <label class="form-check-label" for="gridCheck">
                            {{$course->course_code ." ". $course->course_name}}
                        </label>
                    </div>
                @endforeach
                @error('courses')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
  </main>


</body>
</html>
