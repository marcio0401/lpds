@extends('layouts.login.main')
@section('content')

<br>
<div class="container" style="margin-top: 100px;">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2" style="margin-bottom: 50px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">                                                    
                        <i class="fa fa-lock" aria-hidden="true"></i><strong> Recuperar Senha</strong>                     
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <input type="submit" name="logar" class="btn btn-success submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>        
</div>

@endsection
