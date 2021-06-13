<?php

namespace App\Exports;

use App\Models\Tran;
use Maatwebsite\Excel\Concerns\FromCollection;

class TranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tran::all();
    }
}
