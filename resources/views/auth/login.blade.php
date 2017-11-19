@extends('layouts.login.main')
@section('content')

<br>
<div class="container" style="margin-top: 100px;">
	<div class="row" style="margin-top: 50px;">
        <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2" style="margin-bottom: 50px;">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">                                           
						<i class="fa fa-lock" aria-hidden="true"></i><strong> Autenticação</strong>                     
					</h3>
				</div>
				<div class="panel-body">
					<div style="width: 100%; background-color: blue; color: white; font-weight: bold; font-size: 16px; text-align: center; padding: 10px;">
						Automação Residencial
					</div>
					<br>
					<form method="POST" action="{{ url('/login') }}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="senha">E-mail</label>
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif                               
						</div>
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="senha">Senha</label>
							<input id="password" type="password" class="form-control" name="password" required>
							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif                         
						</div>
						<input type="submit" name="logar" class="btn btn-success submit" value="Acessar">
						<hr>                                 
						<div class="col-md-12">
							<div class="col-md-6">
								<a class="btn btn-link" href="{{ url('/password/reset') }}">
									Recuperar Senha?
								</a>
							</div>
							<div class="col-md-6">
								<a class="btn btn-link" href="{{ url('/register') }}">
									Registrar?
								</a>
							</div>
						</div>
					</form>
					<br>
				</div>
				<div class="panel-footer">
					<p class="text-right text-muted"><small>Desenvolvido por <a href="https://www.facebook.com/marcio.diniz.5203" target="_blank" title="Facebook">Márcio Diniz</a></small></p>
				</div>
			</div>
		</div>        
	</div>
</div>

@endsection