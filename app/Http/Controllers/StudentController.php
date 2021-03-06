<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   $students = Student::all();
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // Validation
        $request->validate($this->validateFields());

        $studentNew = new Student();
        // $studentNew->name = $data['name'];
        // $studentNew->class = $data['class'];
        // $studentNew->languages = $data['languages'];
        $studentNew->fill($data);

        // dd($studentNew);

         // Save New Student / Update DB
        $saved = $studentNew->save();

         // redirect
         if($saved) {
             $idStudentNew = Student::find($studentNew->id);
             return redirect()->route('students.show', $idStudentNew);
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->all();
        $request->validate($this->validateFields($student->id));

        $student->update($data);
        
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $refStudent = $student->name . ' has been deleted';
        $hasDeleted = $student->delete();
        
        if($hasDeleted) {
            return redirect()->route('students.index')->with('deleted', $refStudent);
        }

        return view('students.index');
    }


    // Utilities

    // Validation

    private function validateFields($id = null) {

        return [

            'name' => [
                'required',
                Rule::unique('students')->ignore($id),
                'max:30',
            ],
            'class' => [
                'required',
                'max:25',
            ],
            'languages' => [
                'required'
            ]

        ];

    }
}
