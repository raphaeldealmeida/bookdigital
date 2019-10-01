<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code','description','accountcode','unitprice'
    ];

    public function laboratories(){
        return $this->belongsToMany(Laboratory::class);
    }
}
