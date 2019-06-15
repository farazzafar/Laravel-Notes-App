@extends('layouts.app')

@section('content')


	<div class="container" align="center">

		<div class="panel panel-default">

			<h1>

				{{ $note->title }} 
				<a href="/notes/{{$note->id}}/edit"> <img src="https://image.flaticon.com/icons/svg/61/61456.svg" width="35" height="35"></a>

			</h1>

			<p>{{ $note->body }}</p>


			{!! Form::model(
				$note,
				['action' => ['NoteController@destroy', $note->id],
				'method'  => 'delete'
				]) 
			!!}	

			<div class="form-group">

	  		  <a href="/notes/{{$note->id}}/delete"><button type="delete" class="btn btn-danger">Delete</button></a>

			</div>

			{!! Form::close() !!}
			
		</div>
		
	</div>


@endsection