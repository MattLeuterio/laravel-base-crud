<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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
        
        // validation 
        $request->validate($this->validateNewTeacher());
        // dd($data);

        $newTeacher = New Teacher();
        $newTeacher->fill($data);

        $saved = $newTeacher->save();

        if($saved) {

            $idTeacher = $newTeacher::find($newTeacher->id);
            return redirect()->route('teachers.show', $idTeacher);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        
        return view('teachers.show', compact('teacher'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $data = $request->all();
        
        //validation
        $request->validate($this->validateNewTeacher($teacher->id));
        
        $teacher->update($data);

        return redirect()->route('teachers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $refTeacher = $teacher->name . ' has been deleted';
        $deleted = $teacher->delete();
        
        if($deleted) {
            return redirect()->route('teachers.index')->with('deleted', $refTeacher);
        }

        return view('teachers.index');
    }

    private function validateNewTeacher($id = null) {

        return [
            
            'name' => [
                'required',
                Rule::unique('teachers')->ignore($id),
                'max:30'
            ],
            'gender' => [
                'required',
                'max:1',
            ],
            'age' => [
                'required',
                'gte:18',
                'lte:65'
            ]

        ];

    }
}
