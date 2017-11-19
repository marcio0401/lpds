@extends('layouts.painel.main')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (isset($user))
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'class' => 'form', 'method' => 'put']) !!}
        @else
            {!! Form::open(['route' => 'users.store', 'class' => 'form']) !!}
        @endif
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, array('class' => 'form-control')) }}
        </div>
        <div class='form-group'>
            @foreach ($roles as $role)
                {{ Form::checkbox('roles[]',  $role->id ) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
            @endforeach
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}<br>
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Confirm Password') }}<br>
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
        </div>
        <hr>
        @if (isset($user))
            {!! Form::submit('Alterar', ['class' => 'btn btn-success']) !!}
        @else
            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
        @endif
        <a href="{{route('users.index')}}" class="btn btn-default"> 
            Cancelar
        </a>
        {!! Form::close() !!}               
    </div>
</div><!-- row -->

@endsection

