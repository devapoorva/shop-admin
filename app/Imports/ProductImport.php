<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name' => $row[0],
            'short_name' => $row[1],
            'slug' => $row[2],
            'thumb_image' => $row[3],
            'vendor_id' => $row[4],
            'category_id' => $row[5],
            'sub_category_id' => $row[6],
            'child_category_id' => $row[7],
            'brand_id' => $row[8],
            'qty' => $row[9],
            'weight' => $row[10],
            'sold_qty' => $row[11],
            'short_description' => $row[12],
            'long_description' => $row[13],
            'video_link' => $row[14],
            'sku' => $row[15],
            'seo_title' => $row[16],
            'seo_description' => $row[17],
            'price' => $row[18],
            'offer_price' => $row[19],
            'tags' => $row[20],
            'show_homepage' => $row[21],
            'is_undefine' => $row[22],
            'is_featured' => $row[23],
            'new_product' => $row[24],
            'is_top' => $row[25],
            'is_best' => $row[26],
            'status' => $row[27],
            'is_specification' => $row[28],
            'approve_by_admin' => $row[29]
        ]);
    }
}
