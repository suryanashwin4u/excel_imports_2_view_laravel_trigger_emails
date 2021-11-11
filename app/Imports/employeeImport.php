<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class employeeImport implements ToCollection
{

    public $data = [];

    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach($rows as $i){
            $this->data[] = $i[0];
        }
       
    }

}
