@extends('layouts.layout')


@section('content')
	<div class="col-sm-8 blog-main">
		<h2>Publish a Post</h2>

		<hr/>

		<form method="POST" action="/posts">

		  {{ csrf_field() }}	

		  <div class="form-group">
		    <label for="title">TITLE</label>
		    <input type="text" id="title" class="form-control" placeholder="Title" name="title">
		  </div>

		  <div class="form-group">
		  	<label for="body">BODY</label>
		  	<textarea id="body" class="form-control" name="body"></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary">Publish</button>

		 @include('inc/formErrors')
		</form>

	</div>

@endsection