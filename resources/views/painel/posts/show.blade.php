@extends('layouts.painel.main')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<h1>{{ $post->title }}</h1>
       	<hr>
	    <p class="lead">{{ $post->description }} </p>
    	<hr>
        {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
        <a href="{{route('posts.index')}}" class="btn btn-default">Cancelar</a>
        @can('posts-alterar')
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success" role="button">Alterar</a>
        @endcan
        @can('posts-excluir')
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        @endcan
        {!! Form::close() !!}
	</div>	
</div><!-- row -->

@endsection
