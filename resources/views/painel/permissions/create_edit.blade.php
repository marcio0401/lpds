@extends('layouts.painel.main')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (isset($permission))
            {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'class' => 'form', 'method' => 'put']) !!}
        @else
            {!! Form::open(['route' => 'permissions.store', 'class' => 'form']) !!}
        @endif
        <div class="form-group">
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Descrição') }}
            {{ Form::text('description', null, array('class' => 'form-control')) }}
        </div>
            
       <hr>
        @if (isset($permission))
            {!! Form::submit('Alterar', ['class' => 'btn btn-success']) !!}
        @else
            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
        @endif
        <a href="{{route('permissions.index')}}" class="btn btn-default"> 
            Cancelar
        </a>
        {!! Form::close() !!}               
    </div>
</div><!-- row -->

@endsection

