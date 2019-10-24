<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCatelogy extends Model
{
    //
    protected $table='product_catelgories';
    protected $primaryKey ='product_id';

    public $timestamps = false;
}
