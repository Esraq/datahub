<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainee;
use App\Models\Training;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training=Training::all();
        view()->share('training',$training);
        return view('super_admin/trainee');
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

            'email' => 'required|min:1',
            
            'phone' => 'required|min:1',
            
            'address' => 'required|min:1',
           
            'training' => 'required|min:1',

        
             
            

             ]);

             
             
            

        $training=new Trainee;

        $training->name=$request->get('name');
        $training->email=$request->get('email');
        $training->phone=$request->get('phone');
        $training->address=$request->get('address');
        $training->training_id=$request->get('training');
        $training->save();
        ///echo "save";
        return redirect('/trainee')->with('success', true);
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
        $doc =Trainee::find($id);
        return view('super_admin/trainee_edit',compact('doc','id'));
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
            'email'     => $request->email,
            'phone'        => $request->phone,
            'address'        => $request->address
            
            
        
        );
  
        Trainee::whereId($id)->update($form_data);
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
        $training = \App\Models\Trainee::find($id);
        $training->delete();
        return redirect('/training_list')->with('success', true);
    }
}
