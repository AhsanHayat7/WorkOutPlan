@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="card">
            <div class="card-header">
                <h3>Create Your Workout Plan</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('workout.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @php
                    if (count($workouts) > 0){
                    			$daysofweek = \App\Models\Day_of_week::whereNotIn('id', $workouts->pluck('day_of_week'))->get();
                    		}
                    		$is_rest_day = false;
                    		$is_rest_day = \App\Models\Workoutplan::where('rest_day', 1)->where('user_id', Auth::id())->first();
                    		if (!is_null($is_rest_day)) {
                    		$is_rest_day = true;
                    		}
                    @endphp

                        <div class="form-group">
                            @foreach($daysofweek as $day)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="day_of_week" value = {{$day->id}} >
                                    <label class="form-check-label" for="day_of_week">
                                        {{$day->name}}
                                    </label>
                                </div>
                            @endforeach

                            <br>
                            <div class="form-check">
                              @if($is_rest_day == NULL)
                                    <input class="form-check-input" type="checkbox" value="1" name="rest_day"  >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Rest Day
                                    </label>
                              @endif

                            <div class="form-group">
                                <label for="name">Exercise Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="minutes">Duration in Minutes</label>
                                <input type="number" name="duration_minutes" class="form-control">
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button class="btn btn-success" type="submit">Add Workout Plan</button>
                            </div>
                </form>
            </div>
        </div>
    @endsection
