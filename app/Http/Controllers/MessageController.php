<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Message::all();
        $messages = [];
        foreach($data as $m){
           
            $m['user'] = User::find($m->userId);
          


            array_push($messages,$m);
        }
        // return $messages;
        return view('messages.index',compact('messages'))->with('i', (request()->input('page', 1) - 1) * 25);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      
        $users = User::all();       

        return view('messages.create')->with(['users' => $users]);
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
        'userId' => 'required',
           
            'userId' => 'required',
            'title' => 'required',
            'message' => 'required',
                     


            ]);
            $request['recepient']= Session('user')->id;


        Message::create($request->all());


        return redirect()->route('messages.index')
                        ->with('success','Message created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        $users = User::all();
      

        return view('messages.edit',compact('message'))->with(['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        request()->validate([
            'userId' => 'required',
               
                'userId' => 'required',
                'title' => 'required',
                'message' => 'required',
               
    
    
                ]);

                $message->update($request->all());


                return redirect()->route('messages.index')
                                ->with('success','Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();


        return redirect()->route('messages.index')
                        ->with('success','Message deleted successfully');
    }
}