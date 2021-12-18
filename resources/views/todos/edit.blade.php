@extends('todos.layout')


@section('content')
 		
 		<h1 class="tex-2x1">Update this Todo</h1>
 		<form method="post" action="/todos/update" class="py-s">
			@csrf
			<input type="text" name="title" value="{{$todo->title;}}"  class="py-2 px-2 border rounded"> 
			<input type="submit" name="update" value="Update" class="py-2 border rounded">
		</form>

		<a href="/todos" class="m-5 py-1 px-1 border bg-whit-400 rounded cursor-ponter text-black">Back</a>


@endsection