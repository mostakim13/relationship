<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Detail;
use App\Models\Student;

class DetailController extends Controller
{

    //==================================================DASHBOARD=============================================
    public function dashboard()
    {
        return view('dashboard');
    }

    public function index2()
    {
        $data = Student::all();
        return view('detail', compact('data'));
    }

    public function show2()
    {
        $details = Detail::all();
        return view('showDetail', compact('details'));
    }

    public function edit2($data)
    {
        $info = Detail::findOrFail($data);
        return view('editDetail', compact('info'));
    }


    public function store2(Request $request)
    {

        $detail                = new Detail();
        $detail->student_id    = $request['student_id'];
        $detail->father        = $request['father'];
        $detail->mother        = $request['mother'];
        $detail->address       = $request['address'];
        $detail->save();
        return redirect('/');
    }

    public function update2($id, Request $request)
    {
        $detail = Detail::find($request->id);
        $detail->student_id    = $request->student_id;
        $detail->father        = $request->father;
        $detail->mother        = $request->mother;
        $detail->address       = $request->address;
        $detail->save();

        return redirect('/');
    }
    public function destroy2($id)
    {
        $details               = Detail::find($id);
        $details->delete();

        return redirect('/showData2');
    }


    //==========================================MORE INFORMATION=================================================
}
