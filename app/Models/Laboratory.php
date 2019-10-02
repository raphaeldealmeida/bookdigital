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
        return $this->belongsToMany(Product::class,
            'laboratories_courses_products', 'laboratory_course_id', 'product_id')
            ->withPivot('quantity');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
