@extends('todos.layout')

@section('content')

		<h1 class="tex-2x1">What next you need TO-DO</h1>
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
		
        
		<form method="post" action="/todos/create" class="py-s">
			@csrf
			<input type="text" name="title" class="py-2 px-2 border rounded"> 
			<input type="submit" name="create" value="Create" class="py-2 border rounded">
		</form>

		<a href="/todos" class="m-5 py-1 px-1 border bg-whit-400 rounded cursor-ponter text-black">Back</a>

@endsection