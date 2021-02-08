<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class RoleController extends Controller
{
    public function index($id,$type){

        //echo $id;
       // echo "<br>";
       // echo $type;

        $form_data = array(

            'type'  =>   $type
            
            
        
        );
  
        User::whereId($id)->update($form_data);
        return redirect('/role_list')->with('success', true);
    
    
    
    
    
        }
}
