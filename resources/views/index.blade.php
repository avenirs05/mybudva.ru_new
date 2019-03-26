@extends('layouts.main')

@section('content')
	<v-app id="inspire" dark>
		<drawer></drawer>
		<toolbar locale="{{ app()->getLocale() }}"></toolbar>		
		<content-main></content-main>
		<footer-component></footer-component>
	</v-app>
@endsection