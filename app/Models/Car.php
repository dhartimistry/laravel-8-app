<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = ['name','founded','description'];

    public function carModels(){
        return $this->hasMany(CarModel::class,'car_id');
    }

    public function engines(){
        return $this->hasManyThrough(Engine::class,CarModel::class,'car_id','model_id');
    }

}
