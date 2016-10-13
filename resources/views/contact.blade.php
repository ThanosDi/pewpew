@extends('layouts.master')
@section('contact')
<div class="title m-b-md">
    {{-- Contact Page for {{ $name }} --}}
    <br>
    {{-- From: {{ $location }} --}}
</div>

@if($data)
	<h2>if statement</h2>
@else
	<h2>else statement</h2>
@endif

<hr>
@unless(1==2)
	<h2>unless statement</h2>
@endunless

<hr>
<h2>foreach statement</h2>
@foreach ($people as $key => $person)
	{{$key}}<b>.</b> {{$person}}<br>
	
@endforeach
<hr>

<h2>forelse statement</h2>
@forelse ($peons as $key2 => $noob)
	{{$key}}<b>.</b> {{$person}}<br>
@empty
Noone in the list	
@endforelse
<hr>
<div class="links">
    <a href="https://laravel.com/docs">Documentation</a>
    <a href="https://laracasts.com">Laracasts</a>
    <a href="https://laravel-news.com">News</a>
    <a href="https://forge.laravel.com">Forge</a>
    <a href="https://github.com/laravel/laravel">GitHub</a>
</div>
@endsection