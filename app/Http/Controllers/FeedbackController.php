<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Homework;

use App\Teacher;
use App\Student;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Feedback::all();
        $feedbacks = [];
        foreach($data as $fb){
            $fb['homework'] = Homework::find($fb->homeworkId);
            $fb['teacher'] = Teacher::find($fb->teacherId);
            $fb['student'] = Student::find($fb->studentId);
            array_push($feedbacks,$fb);    
            }

            // return $feedbacks;
        return view('feedbacks.index',compact('feedbacks'))->with('i', (request()->input('page', 1) - 1) * 25);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homeworks = HomeWork::all();
        $teachers = Teacher::all();

        $students = Student::all();

        return view('feedbacks.create')->with(['homeworks' => $homeworks,  'teachers' => $teachers,'students' => $students]);
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
            'homeworkId' => 'required',
            'teacherId' => 'required',
            'studentId' => 'required',
            'feedback' => 'required',
           
            ]);
        Feedback::create($request->all());
                return redirect()->route('feedbacks.index')
                        ->with('success','Feedback created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        $homeworks = Homework::all();
        $teachers = Teacher::all();

        $students = Student::all();

        return view('feedbacks.edit',compact('feedback'))->with(['homeworks' => $homeworks,  'teachers' => $teachers,'students' => $students]);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        request()->validate([
            // 'profilePicture'=>'required',
            'homeworkId' => 'required',
            'teacherId' => 'required',
            'studentId' => 'required',
            'feedback' => 'required',
            
            ]);


        $feedback->update($request->all());


        return redirect()->route('feedbacks.index')
                        ->with('success','Feedback updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();


        return redirect()->route('feedbacks.index')
                        ->with('success','Feedback deleted successfully');
    }
}