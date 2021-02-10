@extends('layouts.main-layout')

@section('content')

		<form action="{{ route('task-update', $task -> id)}}" method="POST">
        @csrf
        @method('POST')

        <label for="title">Title</label>
		<input name="title" type="text" value="{{ $task -> title }}">

		<br>

		<label for="description">Description</label>
		<input name="description" type="text" value="{{ $task -> description }}">

		<br>

		<label for="priority">Priority</label>
		<input name="priority" type="text" value="{{ $task -> priority }}">

        <br>

		<label for="employee_id">Assigned to</label>
		<select name="employee_id">
			@foreach ($employees as $employee)
				<option value="{{ $employee -> id }}"
						@if ($employee -> id == $task -> employee -> id)
							selected
						@endif
					>{{ $employee -> name }} {{ $employee -> lastname }}
				</option>				
			@endforeach
		</select>

		<br>

		<label for="typologies[]">Typologies:</label> <br>

		@foreach ($typologies as $typology)
			<input name="typologies[]" type="checkbox" value="{{ $typology -> id }}"

			{{-- VERSIONE PRO --}}
			@if ($task -> typologies -> contains($typology -> id))
				checked
			@endif
			
			{{-- VERSIONE ESTESA --}}
			{{-- @foreach ($task -> typologies as $task_typology)
				@if ($task_typology -> id == $typology -> id)
					checked
				@endif
			@endforeach --}}

			> {{ $typology -> name }} <br>
		@endforeach

		<br>
		<br>

		<input type="submit" value="UPDATE">
 </form>
	
@endsection