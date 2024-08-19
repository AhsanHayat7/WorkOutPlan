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
                    <div class="form-group">
                        <div class="weekDays-selector">
                            <input type="checkbox" class="weekday" name="day_of_week" value = "1" />
                            <label for="weekday-mon">Mon</label>
                            <input type="checkbox" class="weekday" name="day_of_week" value = "2 " />
                            <label for="weekday-tue">Tues</label>
                            <input type="checkbox" class="weekday" name="day_of_week" value = "3" />
                            <label for="weekday-wed">Wed</label>
                            <input type="checkbox" class="weekday" name="day_of_week" value = "4 " />
                            <label for="weekday-thu">Thu</label>
                            <input type="checkbox" class="weekday" name="day_of_week" value = "5" />
                            <label for="weekday-fri">Fri</label>
                            <input type="checkbox" class="weekday" name="day_of_week" value = "6" />
                            <label for="weekday-sat">Sat</label>
                            <input type="checkbox" class="weekday" name="day_of_week" value = "7" />
                            <label for="weekday-sun">Sun</label>
                            <input type="checkbox" class="weekday" name="day_of_week" value = "0" />
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=1 name="rest_day">
                            <label class="form-check-label" for="flexCheckDefault">
                                Rest Day
                            </label>
                            <br>
                        <div class="form-group">
                            <label for="name">Exercise Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="minutes">Duration in Minutes</label>
                            <input type="integer" name="duration_minutes" class="form-control">
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Add Workout Plan</button>
                        </div>
                </form>
            </div>
        </div>
    @endsection
