@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="card">
        <div class="card-header">
            <h3>Create New WorkoutPlan</h3>
        </div>

<div class="card-body">
    <form action="{{route('workout.store')}}" method="POST">
        @csrf
        <!-- Dropdown to select day -->
        <div class="day-section">
            <label for="day">Select Day:</label>
            <select  name="day_of_week">
                <option value="1">Monday</option>
                <option value="2">Tuesday</option>
                <option value="3">Wednesday</option>
                <option value="4">Thursday</option>
                <option value="5">Friday</option>
                <option value= "6" >Saturday</option>
                <option value="7">Sunday</option>
            </select>
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value=1 name="rest_day" >
            <label class="form-check-label" for="flexCheckDefault">
             Rest Day
            </label>
        <br>
        <br>
        <button type="submit">Save Workout Plan</button>


    </form>
</div>
@endsection

