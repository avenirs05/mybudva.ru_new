<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="yandex-verification" content="30abed22f0fc9acb" />
        <title>Laravel</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">	
		
		<script src="/js/language/{{ str_replace('_', '-', app()->getLocale()) }}.js"></script> 
			
	</head>
    <body>		
		<div id="app">
			<app greet="@lang('text.greet')" locale="{{ app()->getLocale() }}"></app>
        </div>	
        
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>
