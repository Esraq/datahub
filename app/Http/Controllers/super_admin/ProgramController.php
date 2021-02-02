<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/create_program');
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
            'short_description'=>'required|min:1',
            'year'=>'required|min:1'
            
             ]);



        $programme=new Program;

        $programme->name=$request->get('name');
        $programme->short_description=$request->get('short_description');
  
        $programme->year=$request->get('year');
  
  
        $programme->save();

        return redirect('/programme_list')->with('success', true);

       /// return redirect('programme_list')->with('success', true); 
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
        $programme =Program::find($id);
        return view('super_admin/programme_edit',compact('programme','id'));
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
            'short_description'     =>   $request->short_description,
            'year'        =>   $request->year
            
        
        );
  
        Program::whereId($id)->update($form_data);
        return redirect('/programme_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programme = \App\Models\Program::find($id);
        $programme->delete();
        return redirect('/programme_list')->with('success', true);
    }
}
