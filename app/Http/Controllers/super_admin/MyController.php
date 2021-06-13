<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\TranExport;
use App\Imports\TransImport;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    public function importExportView()
    {
       return view('super_admin/import');
    }
    public function export() 
    {
        return Excel::download(new TranExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
      
       

 


        Excel::import(new TransImport,request()->file('file'));
           
        return back();
    }
}
