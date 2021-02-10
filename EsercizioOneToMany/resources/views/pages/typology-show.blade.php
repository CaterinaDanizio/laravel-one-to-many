@extends('layouts.main-layout')

@section('content')

	<h1>Typology: {{ $typology -> name }}</h1>

	<a href="{{ route('typology-edit', $typology -> id) }}">EDIT</a>

	<ul>
		<li>Name: {{ $typology ->name }}</li>
		<li>Description: {{ $typology -> description }}</li>
		<ul>
			<h4>Tasks of this typology</h4>
				@foreach ($typology -> tasks as $task)
					<li>
						<a href="{{ route('task-show', $task -> id) }}">
							Task {{ $task -> id }}: {{ $task -> title }}
						</a>									
					</li>
				@endforeach
			</ul>
		
	</ul>

    <button> <a href="{{ route('typology-index') }}">Torna in Home</a></button>

@endsection