<?php

class MonkeyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$monkeyform = new Monkey\Models\MonkeyForm;

		return View::make('index')->with('monkeyform', $monkeyform);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$monkeyform = new Monkey\Models\MonkeyForm(Input::all());

		if (!$monkeyform->validate()) {
			return View::make('index')->with('monkeyform', $monkeyform)->withErrors($monkeyform->validator);
		} else {
			$monkeyform->save();
			return View::make('thanks')->with('monkeyform', $monkeyform);
		}
	}

}