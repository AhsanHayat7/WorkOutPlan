<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workoutplan extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','day_of_week','rest_day'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function excercise(){
        return $this->hasMany(Excercise::class);
    }

    public function day(){
        return $this->belongsTo(Day_of_week::class);
    }

}
