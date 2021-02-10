@extends('layouts.main-layout')

@section('content')

	
	<a href="{{ route('typology-create') }}">CREATE NEW TYPOLOGY</a>

	<h1>Typologies:</h1>

	
	<ul>
		@foreach ($typologies as $typology)
			<a href="{{ route('typology-show', $typology -> id) }}">
				<li>{{ $typology -> id }}: {{ $typology -> name }}
			</a>
				<h4>Tasks of this typology</h4>
		        <ul>
					@foreach ($typology -> tasks as $task)
						<li>
							<a href="{{ route('task-show', $task -> id) }}">
								Task {{ $task -> id }}: {{ $task -> title }}
							</a>
							<br>
							<br>									
						</li>
					@endforeach
				</ul>
				</li>
			</a>
		@endforeach	
	</ul>	
	
@endsection