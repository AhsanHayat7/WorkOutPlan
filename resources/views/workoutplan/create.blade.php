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
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="day_of_week" id="" value = 1 >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Mon
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="day_of_week" id="" value = 2 >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Tue
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="day_of_week" id="" value = 3 >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Wed
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="day_of_week" id="" value = 4 >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Thu
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="day_of_week" id="" value = 5 >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Fri
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="day_of_week" id="" value = 6>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Sat
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="day_of_week" id="" value = 7>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Sun
                                </label>
                              </div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value = 1 name="rest_day"  >
                                <label class="form-check-label" for="flexCheckDefault">
                                    Rest Day
                                </label>

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
