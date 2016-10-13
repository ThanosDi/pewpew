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
         <!-- if there are login errors, show them here -->          
        @if(Session::has('message'))
            <h4><span style="color:green;">{{ Session::get('message') }}</span></h4>
            </div>
        @endif
        <hr>
        {{ Form::open(array('url' => 'login','class'=>'form-group')) }}
            <h1>Login</h1>

            <!-- if there are login errors, show them here -->
            <p>
                {{ $errors->first('username') }}
                {{ $errors->first('password') }}
            </p>

            <div class="row">
                <div class="col-md-4 col-centered">
                    {{ Form::label('username', 'Username') }}
                    {{ Form::text('username', Input::old('username'), array('placeholder' => 'pewpewlaz0r','class'=>'form-control')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-centered">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password' ,array('class'=>'form-control')) }}
                </div>
            </div>

             <div class="row">
                <div class="col-md-4 col-centered">
                    <p>If you don't have an account you can <a href="{{ URL::to('register') }}">register here</a></p>
                </div>
            </div>

            <!-- if there are login errors, show them here -->
            @if($errors->any())
                <h4><span style="color:red;">{{$errors->first('error')}}</span></h4>
            @endif

            

            <p>{{ Form::submit('Submit!',array('class'=>'btn btn-default')) }}</p>
        {{ Form::close() }}
    </div>
</div>
@endsection