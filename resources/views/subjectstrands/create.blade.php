@extends('layouts.master')
@section('content')
	<div class="container">
		
		<form method="POST" action="/subject-strands/store">
			@csrf
		  <div class="form-group">

		    <input type="text" class="form-control" name='semester' aria-describedby="emailHelp" placeholder="Semester"><br>

		    <input type="text" class="form-control" name='grade_level' aria-describedby="emailHelp" placeholder="Grade Level">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
