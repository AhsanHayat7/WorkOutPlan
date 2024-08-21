<?php

namespace Database\Seeders;

use App\Models\Day_of_week;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $days = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

        foreach($days as $day){
            $model = new Day_of_week();
            $model->name = $day;
            $model->save();
        }
    }
}
