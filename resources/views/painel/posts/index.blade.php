@extends('layouts.painel.main')

@section('content')

@can('posts-cadastrar')
    <div class="x_title">
        <div class="col-md-6">
            <a href="{{route('posts.create')}}" class="btn btn-primary"> 
                <span class="fa fa-plus"></span> Cadastrar Post
            </a>
        </div>  
        <div class="clearfix"></div>    
    </div>
@endcan   

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <br>
        <div class="x_content">
            @foreach ($posts as $post) 
                <a href="{{ route('posts.show', $post->id ) }}"><b><h3><font color="#000080">{{ $post->title }}</font></h3></b><br></a>
                <p>
                    Postado em: <font color="#008000">{{$post->created_at->format('F d, Y h:ia')}}</font>
                </p>                            
                <p >
                    {{str_limit($post->body, 150)}} 
                </p>
                <hr>
            @endforeach
            {!! $posts->links() !!}
        </div>
    </div>  
</div><!-- row -->

@endsection

