<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class TimeTableController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $employees = Employee::all();
        // return view('employee.index',['employees'=>$employees]);

    }
    public function create()
    {
        //Return view to create employee
        return view('addTimeTable');
    }

    public function store(Request $request)
    {
        // $this->validator($request);

        return $request;
        // //Persist the employee in the database
        // //form data is available in the request object
        // $employee = new Employee();
        // //input method is used to get the value of input with its
        // //name specified
        // $employee->firstname = $request->input('firstname');
        // $employee->lastname = $request->input('lastname');
        // $employee->department = $request->input('department');
        // $employee->phone = $request->input('phone');
        // $employee->save(); //persist the data
        // return redirect()->route('employees.index')->with('info','Employee Added Successfully');
    }
}
