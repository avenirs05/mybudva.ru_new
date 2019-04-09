<?php

namespace App\Http\Controllers;

use Lang;
use App\Content;
use App\Feedback;

//use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    public function __invoke() 
    {
		$locale = app()->getLocale();
		$title = Lang::get('text.menu.feedbacks');
		$content = Content::where('lang', $locale)->get()->toArray()[0];
		
		$feedbacks = Feedback::with('realty')->get();
		
		$data = [
			'title' => $title,
			'phone_main' => $content['phone_main'],
			'feedbacks' => $feedbacks,
		];

		return view('feedbacks', $data);
	}
}
