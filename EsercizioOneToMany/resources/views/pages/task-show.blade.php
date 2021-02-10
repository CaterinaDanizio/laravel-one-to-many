@extends('layouts.main-layout')

@section('content')

	<h1>Task: {{ $task -> title }}</h1>

	<a href="{{ route('task-edit', $task -> id) }}">EDIT</a>

	<ul>
		<li>Description: {{ $task -> description }}</li>
		<li>Priority: {{ $task -> priority }}</li>
		<li>Assigned to: {{ $task -> employee -> name }} {{ $task -> employee -> lastname }}</li>
	</ul>

    <button> <a href="{{ route('task-index') }}">Torna in Home</a></button>

@endsection