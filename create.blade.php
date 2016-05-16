@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Ievietot ierakstu </h1>
			<hr>
			{!! Form::open(array('route'=>'posts.store')) !!}
				{{Form::label('title', 'Nosaukums:')}}
				{{Form::text('title', null, array('class'=> 'form-control'))}}

				{{Form::label('body', 'Raksts:')}}
				{{Form::textarea('body', null, array('class'=> 'form-control'))}}
				{{ Form::submit('Ievietot rakstu', array('class'=> 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px'))}}
			{!! Form::close() !!}
		</div>
	</div>
@endsection