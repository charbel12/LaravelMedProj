<?php

namespace App\Imports;

use App\Models\Medicine;
use Maatwebsite\Excel\Concerns\ToModel;

class MedicineImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Medicine([
            'code' =>$row[0],
            'registration_num'  =>$row[1],
            'brand_name'  =>$row[2],
            'strength'  =>$row[3],
            'presentation'  =>$row[4],
            'form'  =>$row[5],
            'agent'  =>$row[6],
            'manufacturer'  =>$row[7],
            'country'  =>$row[8],
            'price'  =>$row[9],
        ]);
    }
}
