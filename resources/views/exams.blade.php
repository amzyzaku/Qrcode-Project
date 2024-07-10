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
                <span class="fs-4">Welcome Exam Officer</span>
            </a>
            @auth
                <a href="{{ route('logout')}}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-primary">Log out</button></a>
            @endauth
        </header>
    </div>

    <div class="container pages">

        <h3>Exams</h3>

        <form class="row g-3" action="regExams" method="POST">
        @csrf
        @method('PUT')
            <div class="col-md-6">
                <h5>Select Hall For Exams</h5>
                @foreach ($allHalls as $hall)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" value="{{$hall->hall_name}}" name="halls">
                        <input type="hidden" name="capacity" value="{{$hall->hall_capacity}}">
                        <label class="form-check-label" for="gridCheck">
                            {{$hall->hall_name. " " .$hall->hall_capacity}}
                        </label>
                    </div>
                @endforeach
                @error('halls')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <h5>All Courses</h5>
                {{-- note later add a check to ensure assignment of courses do not exceed hall capacity --}}
                @foreach ($allCourses as $course)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" value="{{$course->course_code}}" name="courses[]">
                        <label class="form-check-label" for="gridCheck">
                            {{$course->course_code ." ". $course->course_name . " SOC " . $course->studentsOferringCourse}}
                        </label>
                    </div>
                @endforeach
                @error('courses')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="maxRow" class="form-label">Max Students Per Row</label>
                <input type="text" class="form-control" name="row_capacity" id="maxRow" placeholder="e.g 4">
                @error('country')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

    <div class="container mt-5">
        <h5>Registered Exams</h5>
        <div>
            <table border="4" class="table">
                <tr>
                    <th scope="col">Hall</th>
                    <th scope="col">Courses</th>
                    <th scope="col">Generate Code</th>
                </tr>
                @foreach ($registeredExams as $registeredExam)
                    <tr scope="col">
                        <form action="generateSitNumber">
                            @csrf
                            <td>{{$registeredExam->halls}}</td>
                            <input type="hidden" name="hall" value="{{$registeredExam->halls}}">
                            <td>{{$registeredExam->courses}}</td>
                            <input type="hidden" name="capacity" value="{{$registeredExam->capacity}}">
                            <input type="hidden" name="rowCapacity" value="{{$registeredExam->row_capacity}}">
                            <input type="hidden" name="courses" value="{{$registeredExam->courses}}">
                            <td><input type="submit" class="btn btn-primary" value="Generate Sit Numbers"></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
  </main>


</body>
</html>
