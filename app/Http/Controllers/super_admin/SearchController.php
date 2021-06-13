<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tran;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $phone=$request->get('phone');
        //$users=User::find($phone);
        $items=Tran::where('mobile',$phone)->get();

          
       /* $users = DB::table('users')
        ->where('users.phone',$phone)
        ->join('tasks', 'users.id', '=', 'tasks.user_id')
        ->join('organizations', 'users.organization_id', '=', 'organizations.id')
        ->select('users.*','organizations.*')
        ->get();

        */


        $count = DB::table('trans')
                     ->select(DB::raw('count(id) as count'))
                     ->where('mobile', '=', $phone)
                     ->first()
                     ->count;

         if($count==0){

            return redirect('/no_data');
         }
         else{            
         view()->share('items',$items);
         return view('super_admin/relief_list');
        ///echo $users;
         }
      
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
    }
}
