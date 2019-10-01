<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    protected $fillable = [
        'name','area','size','semester'
        //incluido o semester na tabela laboratórios
    ];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function products(){
        return $this->belongsToMany(Products::class);
    }
}
