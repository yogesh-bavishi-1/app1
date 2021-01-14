@extends('layouts.app')

@section('content')
	<h1 class="text-danger ">Are you sure to delete this entry?</h1>
 	<form method="post" action="{{ route('delete',$id) }}">
 		@csrf
 		<button type="submit">Yes(Delete)</button>
 		<button><a style="text-decoration: none; color:#000" href="{{ route('home') }}">No(Go back)</a></button>
 	</form>
@endsection