<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lpj extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];
    public $incrementing = false;
    protected $KeyType = 'string';

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'lpjs', 'length' => 5, 'prefix' => 'LPJ']);
        });
    }
}
