<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
    //
    protected $primaryKey = 'id';
    protected $table = 'depts';
    protected $fillable = array('name', 'create_at_ip', 'update_at_ip');
}
