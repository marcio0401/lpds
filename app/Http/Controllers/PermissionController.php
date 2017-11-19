<?php

namespace Chronos\Http\Controllers;

use Chronos\Models\Permission;
use Chronos\Http\Requests\PermissionFormRequest;

class PermissionController extends Controller
{
    private $totalPage = 10;

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
        $title = 'Listagem de Permissões';
        $permissions = Permission::orderBy('name', 'asc')->paginate($this->totalPage);
        return view('painel.permissions.index', compact('title', 'permissions'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = 'Cadastro de Permissão';
        return view('painel.permissions.create_edit', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PermissionFormRequest $request)
    {
        $permission = Permission::create($request->only('name', 'description'));
        return redirect()
            ->route('permissions.index')
            ->with('flash_message','Permissão cadastrada com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $title = 'Exclusão de Permissão';
        $permission = Permission::findOrFail($id);
        return view('painel.permissions.show', compact('title', 'permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $title = 'Alteração de Permissão';
        $permission = Permission::findOrFail($id);
        return view('painel.permissions.create_edit', compact('title', 'permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(PermissionFormRequest $request, $id) {
        $permission = Permission::findOrFail($id);
        $dataform = $request->only('name', 'description'); 
        $permission->update($dataform);
        return redirect()
            ->route('permissions.index')
            ->with('flash_message', 'Permissão alterada com sucesso !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $delete = $permission->delete();
        if ($delete)
            return redirect()
                ->route('permissions.index')
                ->with('flash_message','Permissão excluída com sucesso !');
        else
            return redirect()
                ->route('permissions.show', $id)
                ->with(['errors' => 'Falha ao excluir permissão !']);
    }
}
