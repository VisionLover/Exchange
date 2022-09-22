<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Attribute;

class Attributegroup extends Model
{
    protected $table="attributegroups";

    public $timestamps=false;

    public function attributes(){
        return $this->belongsTo(Attribute::class);
    }
}
