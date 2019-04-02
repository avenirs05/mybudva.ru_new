@extends('layouts.main')

@section('content')	
	<v-app id="inspire">
		<drawer></drawer>
		<toolbar locale="{{ $locale }}"></toolbar>		
		<content-main 
			locale="{{ $locale }}" 
			areas="{{ $areas }}"
			questions="{{ $questions }}"
			products="{{ $products }}"
		></content-main>
		<footer-component></footer-component>
	</v-app>
@endsection