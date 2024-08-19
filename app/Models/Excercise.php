<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excercise extends Model
{
    use HasFactory;

    public function workout(){
        return $this->belongsTo(Workoutplan::class);
    }

    protected $fillable = ['workoutplan_id','name','duration_minutes'];

}
