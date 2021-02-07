<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salary;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/salary');
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

            'designation' => 'required|min:1',
            
            'year' => 'required|min:1',
            
            'month' => 'required|min:1',
           
            'salary' => 'required|min:1',


             ]);

             
             
            

        $salary=new Salary;

        $salary->name=$request->get('name');
        $salary->month=$request->get('month');
        $salary->year=$request->get('year');
        $salary->designation=$request->get('designation'); 
        $salary->salary=$request->get('salary'); 
        $salary->save(); 
        // echo "save";
        return redirect('/salary_list')->with('success', true);
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
        $salary =Salary::find($id);
        return view('super_admin/salary_edit',compact('salary','id'));
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
            'month'     => $request->month,
            'year'        => $request->year,
            'salary'        => $request->salary,
            'designation'        => $request->designation,
            
        
        );
  
        Salary::whereId($id)->update($form_data);
        return redirect('/salary_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salary = \App\Models\Salary::find($id);
        $salary->delete();
        return redirect('/salary_list')->with('success', true);
    }
}
