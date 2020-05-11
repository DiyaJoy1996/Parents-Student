<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Parents;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function home(){
        return view('students.home');

    }
    public function index()
    {
$id=session('user')->id;
        $students =  Student::where('userId',$id)->get();
       
        // return $data;
        // $data['parent']=Parents::find($data->parentId);
        // $students = [];
        // foreach($data as $st){
        //     $st['parent'] = Parents::find($st->parentId);


        //     array_push($students,$st);
        // }
        // return $data;
      

     
        return view('students.index',compact('students'))->with('i', (request()->input('page', 1) - 1) * 25);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $parents=Parents::all();

        return view('students.create')->with('users',$users)->with('parents',$parents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            // 'profilePicture'=>'required',
            'firstName' => 'required',
            'lastName' => 'required',

            'dob' => 'required',
            'email' => 'required',
            'address' => 'required',
            'postCode' => 'required',
            'area' => 'required',
            'userId'=>'required',
             ]);


        Student::create($request->all());


        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $parents=Parents::all();
       
        return view('students.edit',compact('student'))->with('parents',$parents);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        request()->validate([
            // 'profilePicture'=>'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'address' => 'required',
            'postCode' => 'required',
            'area' => 'required',
            
            ]);


        $student->update($request->all());


        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();


        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully');
    }
}