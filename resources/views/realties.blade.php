@extends('layouts.main')

@section('content')
	<v-app id="inspire">
		<drawer></drawer>
		
		<toolbar 
			locale="{{ app()->getLocale() }}" 
			phone-main="{{ $phone_main }}"			
		></toolbar>
		
		<content-realties 
			realties="{{ $realty }}"
		></content-realties>
		
		<footer-component></footer-component>
	</v-app>
@endsection