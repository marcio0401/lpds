<?php

namespace Chronos\Http\Controllers;

use Chronos\Models\Post;
use Chronos\Http\Requests\PostFormRequest;

class PostController extends Controller
{
    private $totalPage = 5;
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $title = 'Listagem de Posts';
        $posts = Post::orderBy('id', 'desc')->paginate($this->totalPage);
        return view('painel.posts.index', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = 'Cadastro de Post';
        return view('painel.posts.create_edit', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostFormRequest $request)
    {
        $post = Post::create($request->only('title', 'description'));

        return redirect()
            ->route('posts.index')
            ->with('flash_message','Post criado com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $title = 'Exclusão de Posts';
        $post = Post::findOrFail($id);
        return view('painel.posts.show', compact('title', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $title = 'Alteração de Post';
        $post = Post::findOrFail($id);
        return view('painel.posts.create_edit', compact('title', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(PostFormRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $dataform = $request->only('title', 'description'); 
        $post->update($dataform);
        return redirect()
            ->route('posts.index')
            ->with('flash_message', 'Post atualizado com sucesso !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $delete = $post->delete();
        if ($delete)
            return redirect()
                ->route('posts.index')
                ->with('flash_message','Post excluído com sucesso !');
        else
            return redirect()
                ->route('posts.show', $id)
                ->with(['errors' => 'Falha ao excluir post !']);
    }
}
