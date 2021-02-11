<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Time;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $times=Time::all();
        view()->share('times',$times);
        return view('super_admin/expense');
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

          
          
            'sector'=>'required|min:1', 

            'month' => 'required|min:1',
            
            'year' => 'required|min:1',
            
            'amount' => 'required|min:1',
           
            'comments' => 'required|min:1',


             ]);

             

             
             
            

        $expense=new Expense;

         
        $expense->sector=$request->get('sector');
        $expense->month=$request->get('month');
        $expense->year=$request->get('year');
        $expense->cost=$request->get('amount');
        $expense->comments=$request->get('comments');
        $expense->save();
       
        return redirect('/expense_list')->with('success', true);

        
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
        $expense =Expense::find($id);
        $a=$expense->month;
        $times=Time::where('month','!=',$a)->get();
        view()->share('times',$times);
        return view('super_admin/expense_edit',compact('expense','id'));
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

            'sector'  =>   $request->sector,
            'month'     => $request->month,
            'year'        => $request->year,
            'cost'        => $request->amount,
            'comments'        => $request->comments,

            
            
        
        );
  
        Expense::whereId($id)->update($form_data);
        return redirect('/expense_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense = \App\Models\Expense::find($id);
        $expense->delete();
        return redirect('/expense_list')->with('success', true);
    }
}
