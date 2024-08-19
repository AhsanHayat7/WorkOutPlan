@extends('layouts.app')

@section('content')


    <div class="container ">

        <div class="card">
            <div class="card-header">
                @foreach($users as $user)
                Edit Workout Plan Details : {{$user->name}}
                @endforeach
            </div>
            <div class="card-body">
                <form action="{{ route('detail.update',['id'=>$exercise->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Excercise</label>
                        <input type="text" name="name"  value={{$exercise->name}} class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name">Duration Minutes</label>
                        <input type="text" name="duration_minutes"  value={{$exercise->duration_minutes}} class="form-control" >
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Update Workout Details</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
