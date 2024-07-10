<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lazyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Sample code for passind an id with the where clause
Route::get('/post/{id}', function($id) {
    return response('Post ' . $id);
})->where('id', '[1-9]+'); //where clause that gives the range of accepted id


//landing page
Route::get('/', function () {
   return view('index');
});

//registered students page
Route::get('/studentPortal', function () {
    return view('students.rStudent');
});


//admin officer addcourses page
Route::get('/addcourses', function () {
    return view('acourses');
});
//admin officer addHall page
Route::get('/addHall', function () {
    return view('ahall');
});
//admin officer SearchStudent page
Route::get('/searchStudents', function () {
    return view('students.searchStu');
});
//admin officer SearchStudent page
Route::get('/studentvarified', function () {
    return view('students.studentvarified');
});
Route::get('/rTeacher', function () {
    return view('teachers.dashboard');
})->middleware('role.staff');
//admin invigilator page
Route::get('/invigilator', function () {
    return view('invigilator');
})->middleware('role.invigilator');
// //landing page
// Route::get('/callMeLazy', function () {
//     return view('theLazyclassRep');
//  });

//register student details
Route::put('/regStudents', [App\Http\Controllers\Controller::class, 'store']);

//register teachers details
Route::put('/regTeachers', [App\Http\Controllers\Controller::class, 'storeI']);

//register exams details
Route::put('/regExams', [App\Http\Controllers\Controller::class, 'storeII']);

//add courses details
Route::put('/addingcourses', [App\Http\Controllers\Controller::class, 'storeIII']);

//add hall details
Route::put('/addinghall', [App\Http\Controllers\Controller::class, 'storeIV']);

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/teachers', [App\Http\Controllers\Controller::class, 'loadTeachersPage'])->name('teachers');

Route::get('/students', [App\Http\Controllers\Controller::class, 'loadStudentsPage'])->middleware('role.checker')->name('Students');
//admin officer page
Route::get('/admin', [App\Http\Controllers\Controller::class, 'loadAdminPage'])->middleware('role.admin')->name('Administrator');

Route::get('/exams', [App\Http\Controllers\Controller::class, 'loadExamOfficerPage'])->middleware('role.exams')->name('exams');

Route::get('/generateSitNumber', [App\Http\Controllers\Controller::class, 'generateStudentSitNumber'])->name('generateSitNumber');

Route::get('/courseList', [App\Http\Controllers\Controller::class, 'loadCourseList']);

Route::post('/teachers_authenticate', [App\Http\Controllers\Controller::class, 'teachersAuthenticate']);

Route::get('/teacherPortal', [App\Http\Controllers\Controller::class, 'loadTeachersPageI'])->name('verifiedTeachers');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
