<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    const SIZES =[
        "P" => 'P (20 alunos)',
        "M" => 'M (30 alunos)',
        "G" => 'G (40 alunos)',
    ];

    protected $fillable = [
        'name','area','size','semester'
        //incluido o semester na tabela laboratórios
    ];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function getProductsSumPriceAttribute(): float {
        return $this->products->sum(function ($product) {
            return $product->unitprice * $product->pivot->quantity;
        });
    }
}
