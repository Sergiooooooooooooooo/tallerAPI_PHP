<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_car';
    protected $fillable = [
        'car_make',
        'car_model',
        'car_year',
        'car_price',
        'car_status',
        'category_id',
        'barcode',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
