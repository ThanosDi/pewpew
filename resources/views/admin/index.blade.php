@extends('layouts.masteradmin')
@section('pageTitle', $admintitle)
@section('contentadmin')
{{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> --}}
<div class="col-md-10">
	<form>
		 <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
		    <small id="title" class="form-text text-muted">Enter a descriptive title</small>
		  </div>
		 <div class="form-group"> 
		 	<label for="bodycode">Body code</label>
			<textarea id="article-ckeditor" name="bodycode" id="bodycode"></textarea>
			<small id="bodycode" class="form-text text-muted">Enter a descriptive title</small>
		</div>
	</form>
	<script>
    //CKEDITOR.replace( 'article-ckeditor' );
</script>
</div>
@endsection