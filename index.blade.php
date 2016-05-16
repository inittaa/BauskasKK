@extends('layouts.app')

@section('content')
	<div class="row col-md-offset-2" >
		<div class="col-md-10">
			<h1>Visi ieraksti</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('posts.create')}}" class="btn btn-lg btn-block btn-primary">Ievietot jaunu ierakstu</a>
		</div>
		<hr>
	</div>
	<div class="row">
		<div class="col-md-12 ">
			<table class="table">
				<thead>
					<th>Nosaukums</th>
					<th>Teksts</th>
					<th>Izveidots</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($posts as $post)
						
						<tr>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('d.m.Y, H:i', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>
@endsection