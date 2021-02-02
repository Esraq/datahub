<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Organization;
use App\Models\Region;
use App\Models\User;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations=Organization::all();
        $regions=Region::all();
        view()->share('organizations',$organizations);
        view()->share('regions',$regions);
        return view('super_admin/employee');
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
            
            'address' => 'required|min:1',
            
            'phone' => 'required|min:11',
           
            'designation' => 'required|min:1',

             'organization'=>'required|min:1',
             
             'region'=>'required|min:1',

             'password'=>'required|min:1',

             'photo'=>'required|min:1'

             ]);
     

     
             if($request->hasfile('photo'))
             {
                 $file = $request->file('photo');
                 $name=time().$file->getClientOriginalName();
                 $file->move(public_path().'/public/images/', $name);
             }
  
        $user=new User;
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->address=$request->get('address');
        $user->phone=$request->get('phone');
        $user->designation=$request->get('designation');
        $user->type=$request->get('role');
        $user->organization_id=$request->get('organization');
        $user->region_id=$request->get('region');
        $user->password=\Hash::make($request->get('password'));
        $user->filename=$name;
        $user->save();
        return redirect('employee_list')->with('success', true); 
       

        

       
      
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
        $regions=Region::all();
        
        $users = DB::table('users')
            ->join('organizations', 'users.organization_id', '=', 'organizations.id')
            ->join('regions', 'users.region_id', '=', 'regions.id')
            ->select('users.*', 'regions.region_name', 'organizations.organization_name')
            ->where('users.id', '=', $id)
            ->get();

            ///echo $users;
         view()->share('users',$users);
        view()->share('organizations',$organizations);
        view()->share('regions',$regions);
         return view('super_admin/employee_edit');
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('public/images'), $image_name);
        }


        $form_data = array(
            'name'       =>   $request->name,
            'email'        =>  $request->email,
            'address'  =>   $request->address,
            'phone'  =>   $request->phone,
            'designation'=>$request->designation,
            
            'organization_id'=>$request->organization,
            'region_id'=>$request->region,
            'filename'     =>   $image_name
        );

        User::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('employee_list')->with('success', true); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\Models\User::find($id);
        $user->delete();
        return redirect('/employee_list')->with('success', true);
    }
}
