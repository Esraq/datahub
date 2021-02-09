<?php

namespace App\Http\Controllers\whef;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('whef/task');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $this->validate($request,[

          
          
            'start_date'=>'required|min:1', 
 
             
            'end_date' => 'required|min:1',
             
            'description' => 'required|min:1',
            
            'comment' => 'required|min:1'
 
          
              
             
 
             ]);
 
              
      








        $user=auth()->user();
        $user_id=$user->id;
        $organization_id=$user->organization_id;

        $task=new Task;

        $task->start_date=$request->get('start_date');
        $task->end_date=$request->get('end_date');
        $task->description=$request->get('description');
        $task->organization_id= $organization_id;
        $task->user_id=$user_id;
        $task->comment=$request->get('comment');
        
        $task->save();

        return redirect('/task_list')->with('success', true);

        ////return redirect('/programme_list')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
       




        $task =Task::find($id);
        return view('whef/task_edit',compact('task','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = array(

            'start_date'  =>   $request->start_date,
            'end_date'     => $request->end_date,
            'description'        => $request->description,
            'comment'        => $request->comment
           
            
        
        );
  
        Task::whereId($id)->update($form_data);
        return redirect('/task_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = \App\Models\Task::find($id);
        $task->delete();
        return redirect('/task_list')->with('success', true);
    }
}
