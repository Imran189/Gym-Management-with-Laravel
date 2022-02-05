<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class StudentController extends Controller
{
    public function ViewStudent()
    {
        $std = Student::all();
        // $vdate = $std->validity;


        $currentDate = date('d-m-Y');
        //$currentDate = date('Y-m-d', strtotime($currentDate));

        // $valid = Student::whereBetween('validity', '>', $currentDate);



        return view('backend.student.ongoingstd', compact('std', 'currentDate'));
    }

    public function AddStudent()
    {
        $std = Student::latest()->get();
        return view('backend.student.addstudent', compact('std'));
    }

    public function StoreStudent(Request $request)
    {

        $validated = $request->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'age' => 'required',
                'plan' => 'required',
                'validity' => 'required',

            ]
        );

        $std = new Student();
        $std->name = $request->name;
        $std->phone = $request->phone;
        $std->email = $request->email;
        $std->gander = $request->gender;
        $std->age = $request->age;
        $std->plan = $request->plan;
        $std->validity = $request->validity;

        $code_generate = 'STD-';
        $gid = IdGenerator::generate(['table' => 'students', 'field' => 'GID', 'length' => 6, 'prefix' => $code_generate]);

        $std->GID = $gid;

        $std->save();



        return redirect()->back()->with('message', 'New Student Added Successfully');
    }

    public function EditStudent($id)
    {
        $std = Student::find($id);
        return view("backend.student.editstd", compact("std"));
    }

    public function UpdateStudent(Request $request, $id)
    {
        $std = Student::find($id);

        $std->name = $request->name;
        $std->phone = $request->phone;
        $std->email = $request->email;
        $std->gander = $request->gender;
        $std->age = $request->age;
        $std->plan = $request->plan;
        $std->validity = $request->validity;

        $std->save();

        return redirect()->route("add.student")->with('message', 'Student Updated Successfully');
    }
}
