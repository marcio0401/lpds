@extends('layouts.painel.main')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (isset($role))
            {!! Form::model($role, ['route' => ['roles.update', $role->id], 'class' => 'form', 'method' => 'put']) !!}
        @else
            {!! Form::open(['route' => 'roles.store', 'class' => 'form']) !!}
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

        <h2><b><span class="label label-danger">PERMISSÕES PARA ESTE PERFIL</span></b></h2>
        <br>
        @foreach ($permissions as $permission)
        <ul class="to_do">
            <li>
                @if (isset($role))
                    {{Form::checkbox('permissions[]', $permission->id, $role->permissions ) }}
                @else
                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                @endif
                {{Form::label($permission->name, ucfirst($permission->name)) }}<br>
            </li>
        </ul>
        @endforeach
        <hr>
        @if (isset($role))
            {!! Form::submit('Alterar', ['class' => 'btn btn-success']) !!}
        @else
            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
        @endif
        <a href="{{route('roles.index')}}" class="btn btn-default"> 
            Cancelar
        </a>
        {!! Form::close() !!}               
    </div>
</div><!-- row -->

@endsection

