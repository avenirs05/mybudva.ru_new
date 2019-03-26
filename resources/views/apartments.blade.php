@extends('layouts.main')

@section('content')
	<v-app id="inspire" dark>
		<drawer></drawer>
		<toolbar locale="{{ app()->getLocale() }}"></toolbar>
		<content-apartments></content-apartments>
		<footer-component></footer-component>
	</v-app>
@endsection