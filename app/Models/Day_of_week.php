<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day_of_week extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function workout(){
        return $this->hasMany(Workoutplan::class);
    }
}
