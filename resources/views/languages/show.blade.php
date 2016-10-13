@extends('layouts.master')
@section('pageTitle', $language->name)
@section('content')
	<div class="title m-b-md">
		<h1>{{$language->name}}</h1>
		<p>{{$language->description}}</p>
	</div>
	<hr>
	
@endsection