<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Organization;


class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations=Organization::all();
        view()->share('organizations',$organizations);
        return view('super_admin/training');
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

          
          
            'name'=>'required|min:1', 

            'organization' => 'required|min:1',
            
            'trainer' => 'required|min:1',
            
            'start_date' => 'required|min:1',
           
            'end_date' => 'required|min:1',

             'budget'=>'required|min:1'
             
            

             ]);

             
             
            

        $training=new Training;

        $training->name=$request->get('name');
        $training->start_date=$request->get('start_date');
        $training->end_date=$request->get('end_date');
        $training->budget=$request->get('budget');
        $training->organization_id=$request->get('organization');
        $training->trainer=$request->get('trainer');
        $training->save();
        return redirect('/training_list')->with('success', true);
        
     
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
        $organizations=Organization::all();
        $training =Training::find($id);
        view()->share('organizations',$organizations);
        return view('super_admin/training_edit',compact('training','id'));
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

            'name'  =>   $request->name,
            'trainer'     => $request->trainer,
            'start_date'        => $request->start_date,
            'end_date'        => $request->end_date,
            'budget'=>$request->budget,
            'organization_id'=>$request->organization
            
        
        );
  
        Training::whereId($id)->update($form_data);
        return redirect('/training_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = \App\Models\Training::find($id);
        $training->delete();
        return redirect('/training_list')->with('success', true);
    }
}
