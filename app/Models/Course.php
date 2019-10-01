<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Course extends Model
{
    protected $fillable = [
        'name','modality','area_id'
    ];

    public function area(){

        return $this->belongsTo(Area::class,'area_id','id');
    }
    
    public function laboratories(){
        return $this->belongsToMany(Laboratory::class);
    }
}
