@extends('layouts.painel.main')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<p><b>Nome:</b> {{$permission->name}}</p>
		<p><b>Descrição:</b> {{$permission->description}}</p>
		<p><b>Data de Cadastro:</b> {{$permission->created_at->format('F d, Y h:ia')}}</p>
		<hr>
		{!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'DELETE']) !!}
		{!!	Form::submit("Excluir", ['class' => 'btn btn-danger']) !!}
		<a href="{{route('permissions.index')}}" class="btn btn-default"> 
			Cancelar
		</a>
		{!! Form::close() !!}	
	</div>	
</div><!-- row -->

@endsection
