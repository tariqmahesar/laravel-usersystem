@extends('todos.layout')

@section('content')


       
       <div class="flex justify-center">
       	
       	<h1 class="tex-2x1">All Your TO-DO</h1>
       	<a href="/todos/create" class="mx-5 py-1 px-1 bg-blue-400 rounded cursor-ponter text-white">Create New</a>
       
       </div>

		<ul class="my-5">
			@foreach( $todos as $todo)
			<li class="flex justify-center py-2">
				<p>{{$todo->title}}</p>
				<a href="{{'/todos/edit/'.$todo->id}}" class="mx-5 py-1 px-1 bg-orange-400 rounded cursor-ponter text-white">Edit</a>
			</li>
			@endforeach
		</ul>

@endsection