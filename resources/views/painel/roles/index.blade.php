@extends('layouts.painel.main')

@section('content')

@can('roles-cadastrar')
    <div class="x_title">
        <div class="col-md-6">
            <a href="{{route('roles.create')}}" class="btn btn-primary"> 
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
                <th>Perfil</th>
                <th>Permissão</th>
                <th>Ações</th>
            </tr>
            @forelse($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->permissions()->pluck('name')->implode(', ') }}</td>
                    <td width="1%" nowrap>
                        @can('roles-alterar')
                            <a href="{{route('roles.edit', $role->id)}}" class="btn btn-xs btn-success">
                                <span class="fa fa-pencil"></span> Alterar
                            </a>
                        @endcan
                        @can('roles-excluir')
                            <a href="{{route('roles.show', $role->id)}}" class="btn btn-xs btn-danger">
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
        {!! $roles->links() !!}                 
    </div>  
</div><!-- row -->

@stop

