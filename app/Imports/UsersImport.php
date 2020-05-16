<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Product([
            
            'category_id'     => $row[1],
            'tag_id'    => $row[2],
            'slug'    => $row[3],
            'name'    => $row[4],
            'price'    => $row[5],
            'image'    => $row[6],
            'quantity'    => $row[7],
            'color'    => $row[8],
            'size'    => $row[9],
            'promotion'    => $row[10],
            'description'    => $row[11],
            'detail'    => $row[12],
            'created_at' => $row[13],
            'updated_at' => $row[14],

        ]);
    }
}
