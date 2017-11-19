@extends('layouts.painel.main')

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<p><b>Nome:</b> {{$user->name}}</p>
		<p><b>E-mail:</b> {{$user->email}}</p>
		<p><b>Data de Cadastro:</b> {{$user->created_at->format('F d, Y h:ia')}}</p>
		<hr>
		{!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
		{!!	Form::submit("Excluir", ['class' => 'btn btn-danger']) !!}
		<a href="{{route('users.index')}}" class="btn btn-default"> 
			Cancelar
		</a>
		{!! Form::close() !!}	
	</div>	
</div><!-- row -->

@endsection
