<?php

namespace Chronos\Http\Controllers;

use Chronos\Models\Role;
use Chronos\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller {

    private $totalPage = 10;

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $title = 'Listagem de Perfis';
        $roles = Role::orderBy('name', 'ASC')->paginate($this->totalPage);
        return view('painel.roles.index', compact('title', 'roles'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $title = 'Cadastro de Perfil';
        $permissions = Permission::all();
        return view('painel.roles.create_edit', compact('title', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name'=>'required|unique:roles|max:30',
            'description' => 'max:100',
            'permissions' =>'required',
            ]
        );

        $role = Role::create($request->only('name', 'description', 'permissions'));

        $permissions = $request['permissions'];
        if (isset($permissions)) {        
            $role->permissions()->sync($permissions);            
        }        
        else {
            $role->permissions()->detach();
        }

        return redirect()
            ->route('roles.index')
            ->with('flash_message',' Perfil cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $title = 'Exclusão de Perfil';
        $role = Role::findOrFail($id);
        return view('painel.roles.show', compact('title', 'role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $title = 'Alteração de Perfil';
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('painel.roles.create_edit', compact('title', 'role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $role = Role::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:30|unique:roles,name,'.$id,
            'permissions' =>'required',
        ]);
        

        $dataform = $request->only('name', 'permissions'); 
        $role->update($dataform);

        $permissions = $request['permissions'];
        if (isset($permissions)) {        
            $role->permissions()->sync($permissions);            
        }        
        else {
            $role->permissions()->detach();
        }

        return redirect()
            ->route('roles.index')
            ->with('flash_message',' Perfil alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $role = Role::findOrFail($id);
        $delete = $role->delete();
        if ($delete)
            return redirect()
                ->route('roles.index')
                ->with('flash_message',' Perfil excluído com sucesso!');
        else
            return redirect()
                ->route('roles.show', $id)
                ->with(['errors' => 'Falha ao excluir perfil!']);
    }
    
}
