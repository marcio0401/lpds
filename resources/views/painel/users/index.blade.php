@extends('layouts.painel.main')

@section('content')

@can('users-cadastrar')
    <div class="x_title">
        <div class="col-md-6">
            <a href="{{route('users.create')}}" class="btn btn-primary"> 
                <span class="fa fa-plus"></span> Cadastrar
            </a>
        </div>  
        <div class="clearfix"></div>    
    </div>                  
@endcan    

<br>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data de cadastro</th>
                <th>Perfil</th>
                <th width="200px">Ações</th>
            </tr>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(', ') }}</td>
                    <td width="1%" nowrap>
                        @can('users-alterar')
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-xs btn-success">   <span class="fa fa-pencil"></span> Alterar
                            </a>
                        @endcan
                        @can('users-excluir')
                            <a href="{{route('users.show', $user->id)}}" class="btn btn-xs btn-danger">
                                <span class="fa fa-trash"></span> Excluir
                            </a> 
                        @endcan
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="90">
                        <p>Nenhum Resultado</p>
                    </td>
                </tr>
            @endforelse 
        </table>
        {!! $users->links() !!}                 
    </div>  
</div><!-- row -->

@endsection

