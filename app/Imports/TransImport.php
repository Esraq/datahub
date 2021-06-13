<?php

namespace App\Imports;

use App\Models\Tran;
use Maatwebsite\Excel\Concerns\ToModel;

class TransImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tran([
           
            'serial_no'     => @$row[0],
            'name'    => @$row[1], 
            'mobile' => @$row[2],
            'nid'=> @$row[3],
            
        ]);
    }
}
