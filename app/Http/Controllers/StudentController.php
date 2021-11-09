<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Student;
use App\Models\Detail;

class studentController extends Controller
{

    //==================================================DASHBOARD=============================================
    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        return view('student');
    }

    public function home1()
    {
        $students = Student::all();
        return view('home', compact('students'));
    }

    public function getDetail($student_id)
    {
        // Passing user id into find()
        return Student::find($student_id)->detail;
    }

    public function getStudent($id)
    {
        // Passing phone id into find()
        return Detail::find($id)->student;
    }

    //===============================STUDENT INFORMATION============================================

    public function show1()
    {
        $students = Student::all();
        return view('show', compact('students'));
    }

    public function edit1($data)
    {
        $info = Student::findOrFail($data);
        return view('edit', compact('info'));
    }


    public function store1(Request $request)
    {
        $course_image = $request->file('image');
        $filename = null;
        if ($course_image) {
            $filename = time() . $course_image->getClientOriginalName();

            Storage::disk('public')->putFileAs(
                'images/',
                $course_image,
                $filename
            );
        }


        $student                = new Student();
        $student->name          = $request['name'];
        $student->roll          = $request['roll'];
        $student->class         = $request['class'];
        $student->section       = $request['section'];
        $student->image         = $filename;
        $student->save();
        return redirect('/');
    }

    public function update1($id, Request $request)
    {
        $filename = null;
        $uploadedFile           = $request->file('image');
        $oldfilename            = $student['image'] ?? 'demo.jpg';

        $oldfileexists          = Storage::disk('public')->exists('/storage/images/' . $oldfilename);

        if ($uploadedFile !== null) {

            if ($oldfileexists && $oldfilename != $uploadedFile) {
                //Delete old file
                Storage::disk('public')->delete('storage/images/' . $oldfilename);
            }
            $filename_modified  = str_replace(' ', '_', $uploadedFile->getClientOriginalName());
            $filename           = time() . '_' . $filename_modified;

            Storage::disk('public')->putFileAs(
                'images/',
                $uploadedFile,
                $filename
            );

            $data['image']      = $filename;
        } elseif (empty($oldfileexists)) {
            //throw new GeneralException('Course image not found!');
        }


        $student = Student::find($request->id);
        // $detail = Detail::findOrFail($id);
        $student->name          = $request->name;
        $student->roll          = $request->roll;
        $student->class         = $request->class;
        $student->section       = $request->section;
        $student->image         = $filename;
        $student->save();

        return redirect('/');
    }


    public function destroy1($id)
    {
        $students               = Student::find($id);
        $students->delete();

        return redirect('/showData1');
    }
    public function relation()
    {
        //$details = Detail::first();
        //dd($details);
        //$students = Student::where('id', $details->student_id)->get();
        $students = Student::all();
        return view('home', compact('students'));
    }


    //==========================================MORE INFORMATION=================================================
}
