<?php

namespace App\Imports;

use App\Models\Listing;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ListingImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Listing([
            'name' => $row['name'],
            'user_id' => $row['user_id'],
            'price' => $row['price'],
            'tags' => $row['tags'],
            'width' => $row['width'],
            'radius' => $row['radius'],
            'profile' => $row['profile'],
            'location' => $row['location'],
            'description' => $row['description'],
        ]);
    }
}
