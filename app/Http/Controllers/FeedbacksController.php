<?php

namespace App\Http\Controllers;

use Lang;

//use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    public function __invoke() 
    {
		$data = [
			'title' => Lang::get('text.title_tag.feedbacks')
		];

		return view('feedbacks', $data);
	}

}
