<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Illuminate\Contracts\Cache\Store;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = student::all();
        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('student_photo');
        $original_filename = $image->getClientOriginalName();
        Storage::disk('public')->put($original_filename,File::get($image));
        
        $b = new student([
            'student_name' => $request->get('student_name'),
            'student_gender' => $request->get('student_gender'),
            'student_mobile' => $request->get('student_mobile'),
            'student_email' => $request->get('student_email'),
            'student_photo' => $original_filename,
            'student_address' => $request->get('student_address'),
            'student_language' => implode (', ', $request->get('student_language')),
        ]);
        $b->save();
        return redirect('student')->with('Success','Student Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sdata = student::where('id',$id)->first();
        return view('student.show',compact('sdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $studentarray = student::where('id',$id)->first();
        return view ('student.edit',compact('studentarray'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $image = $request->file('student_photo');
        $original_filename = $image->getClientOriginalName();
        Storage::disk('public')->put($original_filename,File::get($image));

        $studentarray = student::where('id',$id)->first();
        $studentarray->student_name = $request->get('student_name');
        $studentarray->student_gender = $request->get('student_gender');
        $studentarray->student_mobile = $request->get('student_mobile');
        $studentarray->student_email = $request->get('student_email');
        $studentarray->student_photo = $original_filename;
        $studentarray->student_address = $request->get('student_address');
        $studentarray->student_language = implode (', ', $request->get('student_language'));

        $studentarray->save();

        return redirect('/student')->with('Success','Student has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/student')->with('Success','Student has been deleted Successfully');
    }
}
