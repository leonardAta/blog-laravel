@extends('layout.master-back')

@section('content')


<div class="wrapper">
		<h1 id="register-label">Create Post</h1>
		<hr>
		<form id="register"  action ="/addpost" method ="POST">

			@if($msg = Session::get('message'))

				{{ $msg }}

			@endif

			{{ csrf_field() }}


			<div>
				@if($errors->has('title'))
				<span class="err">{{$errors->has('title') }}</span>
				@endif
				<label>title:</label>
				<input type="text" name="title" placeholder="title">
			</div>
			<div>
				@if($errors->has('body'))
				<span class="err">{{$errors->get('body')[0] }}</span>
				@endif

				<label>post:</label>	
				<textarea type="text" name="body" placeholder="Enter post here..."></textarea>
			</div>

			<input type="submit" name="post" value="create">
		</form>

	</div>




@stop