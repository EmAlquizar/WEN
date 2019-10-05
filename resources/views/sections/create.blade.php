@extends('layouts.master')
@section('content')
	<div class="container">
		@if ($errors->any())
    		<div class="alert alert-danger">
       			 <ul>
            		@foreach ($errors->all() as $error)
                		<li>{{ $error }}</li>
            		@endforeach
        		</ul>
            </div>
		@endif
		
		<form method="POST" action="/sections/store">
			@csrf
		  <div class="form-group">
		 
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Section Name"><br>

		    <input type="text" class="form-control" name='is_active' aria-describedby="emailHelp" placeholder="Active">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection