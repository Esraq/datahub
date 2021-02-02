<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentViewController extends Controller
{
    public function index($id){

        $docs=Document::where('program_id',$id)->get();
        view()->share('docs',$docs);
        return view('super_admin/docs');


        
    }
}
