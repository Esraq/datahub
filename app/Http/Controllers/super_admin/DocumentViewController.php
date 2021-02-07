<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Trainee;
use App\Models\Expense;
use DB;

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
    public function project_docs($id){

      $projects=Document::where('project_id',$id)->get();
      view()->share('projects',$projects);
      return view('super_admin/project_details');
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
    public function period($month,$year){

      $times=Expense::where('month',$month)->where('year',$year)->get();
      //echo $times;
      $count = DB::table('expenses')
                     ->select(DB::raw('sum(cost) as count'))
                     ->where('month', '=', $month)
                     ->where('year',$year)
                     ->first()
                     ->count;
      ////echo $count;

                     
      view()->share('times',$times);
      view()->share('count',$count);
      return view('super_admin/expense_report');
      

    }

}
