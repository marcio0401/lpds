@extends('layouts.painel.main')

@section('content')


@can('permissions-cadastrar')
    <div class="x_title">
        <div class="col-md-6">
            <a href="{{route('permissions.create')}}" class="btn btn-primary"> 
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
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
            @forelse($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->description}}</td>
                    <td width="1%" nowrap>
                        @can('permissions-alterar')
                            <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-xs btn-success">
                                <span class="fa fa-pencil"></span> Alterar
                            </a>
                        @endcan
                        @can('permissions-excluir')
                            <a href="{{route('permissions.show', $permission->id)}}" class="btn btn-xs btn-danger">
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
        {!! $permissions->links() !!}                 
    </div>  
</div><!-- row -->

@endsection

