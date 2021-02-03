<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Trainee;


class DocumentViewController extends Controller
{
    public function index($id){

        $docs=Document::where('program_id',$id)->get();
        view()->share('docs',$docs);
        return view('super_admin/docs');


        
    }
    public function trainee($id){

        $trainee=Trainee::where('training_id',$id)->get();
        view()->share('trainee',$trainee);
        return view('super_admin/trainee_list');
      ///echo $trainee;


        
    }
    public function report($id){

        $trainee=Trainee::where('training_id',$id)->get();
        view()->share('trainee',$trainee);
        return view('super_admin/report');
      ///echo $trainee;


        
    }
    public function word($id){

        $trainee=Trainee::where('training_id',$id)->get();
        view()->share('trainee',$trainee);
        return view('super_admin/word');
      ///echo $trainee;


        
    }

}
