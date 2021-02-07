<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;

class TimeModuleController extends Controller
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
        return view('super_admin/time_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super_admin/time_module_create');
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
            'month' => 'required|min:1',
            
            'year' => 'required|min:1',
             ]);

        $time=new Time;

        $time->month=$request->get('month');
        $time->year=$request->get('year');
        $time->save();

        return redirect('/time_module')->with('success', true);
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
        //
        $times = Time::find($id);
        return view('super_admin/time_module_edit',compact('times'));

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
        //
        $request->validate([
            'month' => 'required',
            'year' => 'required',
        ]);
        $time = Time::find($id);
        $time->month=$request->get('month');
        $time->year=$request->get('year');
        $time->save();
  
        return redirect()->route('time_module.index')
                        ->with('success','Time Schedule updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $time = Time::find($id);
        $time->delete();
        return redirect()->route('time_module.index')
                        ->with('success','Product deleted successfully');
    }
}
