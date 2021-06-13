<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;

class TestController extends Controller
{
    public function index(){

     $expenses=Expense::all();
     view()->share('expenses',$expenses);

      return view('super_admin/test');

    }
    public function getData(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page
   
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
   
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value
   
        // Total records
        $totalRecords = Expense::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Expense::select('count(*) as allcount')->where('sector', 'like', '%' .$searchValue . '%')->count();
   
        // Fetch records
        $records = Employees::orderBy($columnName,$columnSortOrder)
          ->where('expenses.sector', 'like', '%' .$searchValue . '%')
          ->select('expenses.*')
          ->skip($start)
          ->take($rowperpage)
          ->get();
   
        $data_arr = array();
        
        foreach($records as $record){
           $id = $record->id;
           $sector = $record->sector;
           $month = $record->month;
           $year = $record->year;
           $cost = $record->cost;
   
           $data_arr[] = array(
             "id" => $id,
             "sector" => $sector,
             "month" => $month,
             "year" => $year,
             "cost"=>$cost
           );
        }
   
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );
   
        echo json_encode($response);
        exit;
  
    }
}
