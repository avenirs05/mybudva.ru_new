@extends('layouts.main')

@section('content')
	<v-app id="inspire">
		<drawer></drawer>
		<toolbar locale="{{ app()->getLocale() }}"></toolbar>
		<content-realties></content-realties>
		<footer-component></footer-component>
	</v-app>
@endsection