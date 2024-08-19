@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Users
        </div>
    </div>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">User_id</th>
                <th scope="col">Day of Week</th>
                <th scope="col">Rest Day</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($workouts as $workout)


            <tr>
                <td>
                    {{$workout->id}}
                </td>

                <td>
                    @if($workout->day_of_week == 1)
                        {{"Monday"}}
                    @elseif($workout->day_of_week == 2)
                        {{"Tuesday"}}
                    @elseif($workout->day_of_week == 3)
                        {{"Wednesday"}}
                    @elseif($workout->day_of_week == 4)
                            {{"Thursday"}}
                    @elseif($workout->day_of_week == 5 )
                            {{"Friday"}}

                    @elseif($workout->day_of_week == 6)
                            {{"Saturday"}}
                    @elseif($workout->day_of_week == 7)
                            {{"Sunday"}}
                    @else
                        {{"No Day "}}

                    @endif
                </td>


                <td>
                    @if($workout->rest_day)
                        {{ "Rest Day" }}

                    @else
                        {{"NO Rest Day"}}

                    @endif

                </td>
                <td><a href="{{ route('workout.edit', ['id' => $workout->id]) }}" class="btn btn-xs btn-info">Edit</a>
                    <span class="glyphicon  glyphicon-pencil"></span>
                </td>


                <td><a href="{{ route('workout.delete', ['id' => $workout->id]) }}" class="btn btn-xs btn-danger">Trashed</a>
                    <span class="glyphicon  glyphicon-trash"></span>
                </td>
            </tr>

             <tr>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
