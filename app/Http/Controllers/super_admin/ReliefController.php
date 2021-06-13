<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Relief;
use App\Models\Tran;

class ReliefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin/create_relief');
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
        $relief=new Tran;

        $relief->serial_no=$request->get('serial_no');
        $relief->name=$request->get('name');
        $relief->mobile=$request->get('mobile');
        $relief->nid=$request->get('nid');
        $relief->save();
        return redirect('/beneficiary_list')->with('success', true);
       ///// echo "done";
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
        $item =Tran::find($id);
        return view('super_admin/relief_edit',compact('item','id'));
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

            'serial_no'  =>   $request->serial_no,
            'name'     => $request->name,
            'mobile'        => $request->mobile,
            'nid'        => $request->nid,
          
            
        
        );
  
        Tran::whereId($id)->update($form_data);
        return redirect('/beneficiary_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $relief = \App\Models\Tran::find($id);
        $relief->delete();
        return redirect('/beneficiary_list')->with('success', true);
    }
}
