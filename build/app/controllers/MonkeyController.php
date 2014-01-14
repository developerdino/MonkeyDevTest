<?php

class MonkeyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$monkeyform = new MonkeyForm;

		return View::make('index')->with('monkeyform', $monkeyform);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

}