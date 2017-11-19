@extends('layouts.painel.main')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (isset($post))
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'class' => 'form', 'method' => 'put']) !!}
        @else
            {!! Form::open(['route' => 'posts.store', 'class' => 'form']) !!}
        @endif
        <div class="form-group">
            {{ Form::label('title', 'Título') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}<br>
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Texto') }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}<br>
        </div>
            
       <hr>
        @if (isset($post))
            {!! Form::submit('Alterar', ['class' => 'btn btn-success']) !!}
        @else
            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
        @endif
        <a href="{{url()->previous()}}" class="btn btn-default"> 
            Cancelar
        </a>
        {!! Form::close() !!}               
    </div>
</div><!-- row -->

@endsection

