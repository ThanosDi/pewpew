@extends('layouts.master')
@section('pageTitle', $hometitle)
@section('content')
<script type="text/javascript" src="{{URL::asset('js/angapp.js')}}"></script>
<div class="container" ng-app="myApp" ng-controller="MovieController">
	<div class="title m-b-md row">
		<h1>Search for a card</h1>
		<hr>
		<input type="text" name="search"  class="form-control" placeholder="Search goddamit" ng-model="search" ng-model-options="{ debounce: 300 }"/>

		<div class="col-md-12 cards">
			<div class="col-md-4 card" ng-repeat="card in cards" ng-if="card.imageUrl">			
				<h2>@{{card.name}} <span ng-if="card.power">[@{{card.power}}]</span></h2>
				<img src="@{{card.imageUrl}}"/>
			</div>
		</div>
	</div>
</div>
@endsection