<?php

namespace App\Http\Controllers;

use App\Models\lga;
use App\Models\Exams;
use App\Models\Halls;
use App\Models\Users;
use App\Models\wards;
use App\Models\Levels;
use App\Models\Courses;
use App\Models\teachers;
use App\Models\fertilizer;
use App\Models\remcenters;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'full_name' => 'required',
            'reg_number' => 'required',
            'phone_number' => 'required',
            'country' => 'required',
            'state' => 'required',
            'level' => 'required',
            'courses' => 'required',
        ]);

        // $arrayToString = implode(',', $request->input('courses'));
        // $formFields['courses'] = $arrayToString;

        Users::create($formFields);

        return redirect('/studentvarified')->with('message', 'welcome you have registered successfully!');
    }
    public function storeI(Request $request)
    {
        $formFields = $request->validate([
            'full_name' => 'required',
            'phone_number' => 'required',
            'role' => 'required',
            'department' => 'required',
            'courses' => 'required',
        ]);

        $arrayToString = implode(',', $request->input('courses'));
        $formFields['courses'] = $arrayToString;
        $formFields['password'] = Hash::make("password");

        Users::create($formFields);

        return back()->withErrors(['success' => 'welcome you have registered a Staff successfully!'])->onlyInput('success');
    }
    public function storeII(Request $request)
    {
        $formFields = $request->validate([
            'halls' => 'required',
            'courses' => 'required',
            'capacity' => 'required',
            'row_capacity' => 'required',
        ]);

        $arrayToString = implode(',', $request->input('courses'));
        $formFields['courses'] = $arrayToString;

        Exams::create($formFields);

        return redirect('/studentvarified')->with('message', 'welcome you have registered successfully!');
    }
    public function storeIII(Request $request)
    {
        $formFields = $request->validate([
            'course_code' => 'required',
            'course_name' => 'required',
            'level' => 'required',
            'semester' => 'required',
        ]);

        Courses::create($formFields);

        return back()->withErrors(['success' => 'Course has been Successfully Added'])->onlyInput('success');
    }
    public function storeIV(Request $request)
    {
        $formFields = $request->validate([
            'hall_name' => 'required',
            'hall_capacity' => 'required',
        ]);

        Halls::create($formFields);

        return back()->withErrors(['success' => 'Hall has been Successfully Added'])->onlyInput('success');
    }
    public function loadTeachersPage(Request $request)
    {
        return view('teachers.register_teachers', [
            'allCourses' => Courses::all()
        ]);
    }
    public function loadStudentsPage(Request $request)
    {
        return view('students.student', [
            'allLevels' => Levels::all(),
            'allCourses' => Courses::all()
        ]);
    }
    public function loadAdminPage(Request $request)
    {
        return view('admin', [
            'allHalls' => Halls::all(),
            'allCourses' => Courses::all()
        ]);
    }
    public function loadTeachersPageI(Request $request)
    {
        return view('auth.login_teachers');
    }
    public function teachersAuthenticate(Request $request)
    {
        $formFields = $request->validate([
            'full_name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('rTeacher');
        }
        return back()->withErrors(['full_name' => 'invalid'])->onlyInput('full_name');
    }
    public function loadExamOfficerPage(Request $request)
    {
        return view('exams', [
            'allHalls' => Halls::all(),
            'allCourses' => Courses::all(),
            'registeredExams' => Exams::all(),
            'courseCount2' => Users::count2()
        ]);
    }

    public function loadCourseList()
    {
        $courses = Courses::whereHas('level', function (){
            $query->where('level', request()->input(key:'level', default:0));
        })->pluck('name', 'id');

        return response()-json($courses);
    }
    public function generateStudentSitNumber(Request $request)
    {
        $formFields = $request->validate([
            'hall' => 'required',
            'capacity' => 'required',
            'rowCapacity' => 'required',
            'courses' => 'required'
        ]);
        $hall = $formFields['hall'];
        $capacity = $formFields['capacity'];
        $rowCapacity = $formFields['rowCapacity'];

        $tet = explode(',', $request->input('courses'));

        $startSitCounter = 1;
        $sitRecordKeeper = 0;

        foreach ($tet as $course) {

            $students = Users::getAllStudents($course);
            $counter = $sitRecordKeeper;


            foreach($students as $student){
                $individual = Users::find($student);

                $joiner = $startSitCounter;
                $sitNumber = ($joiner * $counter);

                $individual->sit_number = $sitNumber;

                $individual->save();
                $counter = ($rowCapacity - 1 + $counter);
            }
            $sitRecordKeeper = $sitRecordKeeper + 1;
        }
        return redirect('/studentvarified')->with('message', 'welcome you have registered successfully!');

    }
    public function step1($student, $startSitCounter, $counter, $rowCapacity){

        return $counter;
    }














    public function storeedit(Request $request, string $lgaa, string $ward, string $token)
    {
        $lga = lga::findlga($request->lga);
        $pWard = wards::findlgaid($lga->id, $ward);
        $remcenter = remcenters::find($pWard->r_id);
        $person = Users::findremember_token($token);

        $person->remcenter = $remcenter->center_name;

        $person->save();
    }

    public function validate(Request $request)
    {
        $formFields = $request->validate([
            'input_code' => ['required', 'min:15', 'max:16'],
            'mobile_number' => ['required', 'min:10', 'max:11']
        ]);

        $farmer = Users::findinput_code1($request->input_code);
        if ($farmer) {
            $farmerm = Users::findmobile_number($request->mobile_number);
            if ($farmerm) {
                $farmer = Users::findinput_code($request->input_code);
                if ($farmer->claim_state == 'claimed') {
                    return back()->withErrors(['input_code' => 'this farmer --' . $farmer->name . '-- has claimed'])->onlyInput('input_code');
                }
            }else
            {
                return back()->withErrors(['mobile_number' => 'Invalid mobile number Check And Try Again'])->onlyInput('mobile_number');
            }
        } else {
            return back()->withErrors(['input_code' => 'Invalid Code Check And Try Again'])->onlyInput('input_code');
        }

        return view('verifyFarmer', [
            'farmer' => $farmer,
            'fertilizertypes' => fertilizer::all()
        ]);
    }
    public function verified(Request $request, string $id)
    {
        $farmer = Users::find($id);
        $agd = Users::find($request->agdid);
        $farmer->claim_state = $request->claim_state;
        $farmer->agdid = $request->agdid;
        $farmer->no_of_fertilizers = $request->no_of_fertilizers;
        $farmer->fertilizer_type = $request->fertilizer_type;
        $farmer->fertilizer_type2 = $request->fertilizer_type2;
        $agd->Cu_fertilizers = $agd->Cu_fertilizers - $request->no_of_fertilizers;
        $agd->Cl_fertilizers = $agd->Cl_fertilizers + $request->no_of_fertilizers;
        $agd->amtToBePaid = $agd->amtToBePaid + fertilizer::fertilizerPriceSum();

        $farmer->save();
        $agd->save();

        return view('confirmation', compact('farmer'));
    }
    public function stock(Request $request)
    {
        return view('stocks', [
            'agd' => Users::findremember_token($request->aid)
        ]);
    }
    public function farmerslist(Request $request)
    {
        return view('farmerslist', [
            'farmerslists' => Users::getfarmerslist($request->aid)
        ]);
    }
}
