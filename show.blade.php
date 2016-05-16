@extends('layouts.app')

@section('content')
	<div class="row col-md-offset-2" >
		<div class="col-md-8">
			<h1>{{ $post->title}}</h1>
			<p class="lead"> {{ $post->body}}</p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Ievietots:</dt>
					<dd>{{ date('d.m.Y, H:i',strtotime($post->created_at)) }}</dd>
				</dl>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6">
				{!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class'=>'btn btn-danger btn-block'))!!} 
			</div>	
		</div>
@endsection