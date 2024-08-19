@extends('layouts.app')

@section('content')


    <div class="container ">

        <div class="card">
            <div class="card-header">
                @foreach ($users as $user)


                Edit Workout Plan : {{$user->name}}
                @endforeach
            </div>
            <div class="card-body">
                <form action="{{ route('workout.update',['id'=>$workout->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="day">Day of Week </label>
                        <input type="text" name="day_of_week"  value={{$workout->day_of_week}} class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name">Rest Day</label>
                        <input type="text" name="rest_day"  value={{$workout->rest_day }} class="form-control">
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Update Workout</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
