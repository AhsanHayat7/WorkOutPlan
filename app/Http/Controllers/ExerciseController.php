<?php

namespace App\Http\Controllers;
use App\Models\Excercise;
use App\Models\Workoutplan;
use Illuminate\Http\Request;
use App\Models\User;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workouts = Workoutplan::all();
        $exercises = Excercise::all();
        $users =  User::all();
        return view('workout-details.index',compact('workouts','exercises','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $exercise = Excercise::find($id);
        $users  = User::all();

        return view('workout-details.edit',compact('exercise','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $exercise = Excercise::find($id);
        $exercise->name = $request->name;
        $exercise->duration_minutes = $request->duration_minutes;
        $exercise->save();

        toastr('Your Exercise has been  Updated Successfully.');
        return  redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $exercise = Excercise::find($id);
        $exercise->delete();

        toastr('Your Exercise has been Deleted Successfully.');
        return redirect()->back();
    }
}
