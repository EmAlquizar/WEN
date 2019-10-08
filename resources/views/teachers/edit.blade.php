@extends('layouts.master')
@section('content')
	<form method="POST" action="/teachers/{{ $teacher->id }}/update">
	@csrf
	 <input value ='{{$teacher->id}}' type ='hidden' name='id'>
	 <select name ='advisory_section' class='form-control'>
		@foreach($sections as $section)
		<option value='{{$section->name}}'>{{$section->name}}</option>
		@endforeach
	 </select>

    </form>
@endsection