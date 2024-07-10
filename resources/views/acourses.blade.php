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
                <span class="fs-4">Welcome To Admins Portal</span>
            </a>
            @error('success')
                <div class="alert alert-success">{{ $message }}</div>
            @enderror
        </header>
    </div>

    <div class="container pages">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="admin">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="addcourses">Add Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addHall">Add New Hall Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="teachers">Register a Staff</a>
            </li>
        </ul>
        <form class="row g-3 mt-5" method="POST" action="addingcourses">
            @csrf
            @method("PUT")

            <div class="col-md-6">
                <label for="coursename" class="form-label">Course Name</label>
                <input type="text" class="form-control" name="course_name" id="coursename">
                @error('course_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="courseCode" class="form-label">Course code</label>
                <input type="text" class="form-control" name="course_code" id="courseCode">
                @error('course_code')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="courses" class="form-label">Select Level</label>
                <select id="courses" name="level" class="form-select">
                <option selected value="">Choose...</option>
                <option value="100">100 Level</option>
                <option value="200">200 Level</option>
                <option value="300">300 Level</option>
                <option value="400">400 Level</option>
                <option value="500">500 Level</option>
                </select>
                @error('level')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="courses" class="form-label">Select Semester</label>
                <select id="courses" name="semester" class="form-select">
                <option selected value="">Choose...</option>
                <option value="First Semester">First Semester</option>
                <option value="Second Semester">Second Semester</option>
                </select>
                @error('semester')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Course</button>
            </div>
        </form>
    </div>
  </main>


</body>
</html>
