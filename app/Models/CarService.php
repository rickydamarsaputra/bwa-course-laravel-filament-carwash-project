<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarService extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'car_services';

    protected $fillable = [
        'name',
        'slug',
        'price',
        'about',
        'photo',
        'duration_in_hour'
    ];
}
