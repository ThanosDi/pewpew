@extends('layouts.master')
@section('content')
<div class="flex-center position-ref full-height container">
    <div class="content container">
        <div class="title m-b-md">
            PewPewSoft
        </div>
       <div class="links">
           {{--  @foreach ($languages as $key => $language)                       
                <a href="{{action('LanguageController@show',[$language->id])}}">{{$language->name}}</a>     
            @endforeach --}}
        </div>
        <hr>
        {{ Form::open(array('url' => 'register','class'=>'form-group')) }}
            <h1>Register</h1>

             <div class="row">
                <div class="col-md-4 col-centered">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', Input::old('name'), array('placeholder' => 'Your name not that we care','class'=>'form-control','required'=>'required')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-centered">
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', Input::old('username'), array('placeholder' => 'pewpewlaz0r','class'=>'form-control','required'=>'required')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-centered">
                {{ Form::label('email', 'E-mail') }}
                {{ Form::email('email', Input::old('email'), array('placeholder' => 'E-mail Address','class'=>'form-control','required'=>'required')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-centered">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('class'=>'form-control','required'=>'required')) }}
                </div>
            </div>

             <div class="row">
                <div class="col-md-4 col-centered">
                {{ Form::label('repassword', 'Re-enter Password') }}
                {{ Form::password('password_confirmation', array('class'=>'form-control','required'=>'required')) }}
                </div>
            </div>

            @if($errors->any())
                <h4><span style="color:red;">{{$errors->first()}}</span></h4>
            @endif
            <div class="row">
                <div class="col-md-4 col-centered"><br>
                    <p>{{ Form::submit('Submit!',array('class'=>'btn btn-default')) }}</p>
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection