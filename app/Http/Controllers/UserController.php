<?php

namespace App\Http\Controllers;

use App\User;
use App\type;
use App\Student;
use App\Teacher;
use App\Parents;
use Illuminate\Http\Request;
use Session; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('users.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $types = type::all();
        // return $types;

        return view('users.create')->with(['types' => $types]);
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
            'email' => 'required',
            'accountId' => 'required',
            'password' => 'required',
            
            ]);

            $users=User::all();
            foreach ( $users as $u ) {
                if ( $u->email == $request->email ) {
                    $msg = "Email already Exists.";
              
                            return redirect()->route('users.create')
                            ->withErrors($msg);
                }
                
            }          
        User::create($request->all());


        return redirect()->route('users.index')
                        ->with('success','Registered successfully.');
    }
    public function logout(Request $request)
    {
        // Auth::logout();
        Session::flush();
        return redirect()->route('users.index')
                        ->with('success','Loged out successfully.'); 
    }


    public function login(Request $request)
    {
        // return $request->email;
        request()->validate([
            // 'profilePicture'=>'required',
            'email' => 'required',           
            'password' => 'required',
            
            ]);

            $users=User::all();
            // return $users;
            $found=true;
           
            foreach ( $users as $u ) {
                if ( ($u->email == $request->email) && ($u->password==$request->password) ) {
                    $loggedUser=$u;
                    $type=type::find( $loggedUser->typeId);  
                    $role= $type->name;   
                    $found=true;              
                    
                    Session::put('role', $role);
                    Session::put('user', $u);
                   
                    Session::put('name');

                    
                    Session::put('loggedIn', true);
                    if($role=='Student'){
                    //    $id=session('user')->id;
                    //     $students =  Student::where('userId',$id)->get();
                      
                        return view('students.home');
                     
                    }
                  else if($role=='Parent'){
                    return view('students.home');
                   
        }
      
       
       
     
        // return view('parents.chat',compact('students'))->with('i', (request()->input('page', 1) - 1) * 25);
                  }
                //   else{
                //     $teachers = Teacher::all();
                //     return view('teachers.index',compact('teachers'))->with('i', (request()->input('page', 1) - 1) * 25);
                //   }
                // }
                // else{
                //     $found=false;
                

                // }
                
                
                
            }  
            if(!$found)    {
    $msg = "Email or Password is incorrect!.";
              
                    return redirect()->route('users.index')
                    ->withErrors($msg);
            }    
        
    }



   

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}