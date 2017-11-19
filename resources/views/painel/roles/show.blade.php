@extends('layouts.painel.main')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<p><b>Nome:</b> {{$role->name}}</p>
		<p><b>Descrição:</b> {{$role->description}}</p>
		<p><b>Data de Cadastro:</b> {{$role->created_at->format('F d, Y h:ia')}}</p>
		<hr>
		{!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
		{!!	Form::submit("Excluir", ['class' => 'btn btn-danger']) !!}
		<a href="{{route('roles.index')}}" class="btn btn-default"> 
			Cancelar
		</a>
		{!! Form::close() !!}	
	</div>	
</div><!-- row -->

@endsection
