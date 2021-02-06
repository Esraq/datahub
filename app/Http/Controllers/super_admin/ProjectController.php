<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Document;
use App\Models\Organization;

class ProjectController extends Controller
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
        return view('super_admin/project');
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

          
          
           'project_name'=>'required|min:1', 

            
           'current_status' => 'required|min:1',
            
           'starting_date' => 'required|min:1',
           
           'end_date' => 'required|min:1',

           'budget'=>'required|min:1'
             
            

            ]);

             
             
            

        $project=new project;

        $project->project_name=$request->get('project_name');
        $project->starting_date=$request->get('starting_date');
        $project->end_date=$request->get('end_date');
        $project->budget=$request->get('budget');
        $project->organization_id=$request->get('organization');
        $project->current_status=$request->get('current_status');
        $project->save();
        return redirect('/project_list')->with('success', true);
        
     
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
        $project =project::find($id);
        view()->share('organizations',$organizations);
        return view('super_admin/project_edit',compact('project','id'));
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

            'project_name'  =>   $request->project_name,
            'current_status'     => $request->current_status,
            'starting_date'        => $request->starting_date,
            'end_date'        => $request->end_date,
            'budget'           =>$request->budget,
            'organization_id'=>$request->organization_id
            
        
        );
  
        Project::whereId($id)->update($form_data);
        return redirect('/project_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = \App\Models\Project::find($id);
        $project->delete();
        return redirect('/project_list')->with('success', true);
    }
}