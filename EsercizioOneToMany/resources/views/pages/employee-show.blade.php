@extends('layouts.main-layout')

@section('content')

	<h1>Employee: {{ $employee -> name }} {{ $employee -> lastname }}</h1>

	<a href="{{ route('employee-edit', $employee -> id) }}">EDIT</a>

	<ul>
		<li>Firstname: {{ $employee -> name }}</li>
		<li>Lastname: {{ $employee -> lastname }}</li>
		<li>Date of birth: {{ $employee -> dateOfBirth }}</li>
		<li>Tasks: 
			<ul>
				@foreach ($employee -> tasks as $task)
					<li>
						<a href="{{ route('task-show', $task -> id) }}">
							{{ $task -> title }}
						</a>
					</li>
				@endforeach
			</ul>
		</li>
	</ul>

    <button> <a href="{{ route('employee-index') }}">Torna in Home</a></button>

@endsection