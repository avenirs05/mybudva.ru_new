@extends('layouts.main')

@section('content')
	<v-app id="inspire">
		<drawer></drawer>
		<toolbar locale="{{ app()->getLocale() }}"></toolbar>
		<content-villas></content-villas>
		<footer-component></footer-component>
	</v-app>
@endsection