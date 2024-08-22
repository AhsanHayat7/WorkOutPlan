<?php

namespace App\Http\Controllers;

use App\Models\Excercise;
use App\Models\Workoutplan;
use App\Models\Day_of_week;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;


class WorkoutController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$workouts = Workoutplan::where('user_id', Auth::user()->id)->get();
		// $day_of_week = Carbon::now();


		return view('workoutplan.index', compact('workouts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{

		$workouts   = Workoutplan::where('user_id', Auth::id())->get();
		$excercises = Excercise::all();
		$daysofweek = Day_of_week::all();

		if (count($workouts) > 0){
			$daysofweek = Day_of_week::whereNotIn('id', $workouts->pluck('day_of_week'))->get();
		}
		$is_rest_day = false;
		$is_rest_day = Workoutplan::where('rest_day', 1)->where('user_id', Auth::id())->first();
		if (!is_null($is_rest_day)) {
			$is_rest_day = true;
		}

		return view('workoutplan.create', compact('excercises', 'workouts', 'daysofweek','is_rest_day'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request )
	{


		$workout = Workoutplan::create([
			'user_id'     => Auth::id(),
			'day_of_week' => $request->day_of_week,
			'rest_day'    => $request->rest_day,
		]);

		Excercise::create([
			'workoutplan_id'   => $workout->id,
			'name'             => $request->name,
			'duration_minutes' => $request->duration_minutes
		]);

		toastr('Sucessfully Created Workout Plan.');


		return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id )
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id )
	{
		//
		$workout = Workoutplan::find($id);
		$users   = User::all();
		return view('workoutplan.edit', compact('workout', 'users'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id )
	{
		//
		$workout              = Workoutplan::find($id);
		$workout->day_of_week = $request->day_of_week;
		$workout->rest_day    = $request->rest_day;
		$workout->save();

		toastr('Your Workout has been  Updated Successfully.');
		return redirect()->route('workout');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id )
	{
		//
		$workout = Workoutplan::find($id);

		$workout->delete();

		toastr('Your workout plan have been deleted Successfully');

		return redirect()->back();
	}


}


