<?php

namespace Chronos\Http\Controllers;

use Chronos\User;
use Chronos\Models\Role;
use Chronos\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $title = 'Listagem de Usuários';
        $users = User::orderBy('name', 'asc')->paginate($this->totalPage);
        return view('painel.users.index', compact('title', 'users'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = 'Cadastro de Usuário';
        $roles = Role::all();
        return view('painel.users.create_edit', compact('title', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserFormRequest $request)
    {
        //$user = User::create($request->only('email', 'name', 'password'));
        $user =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);


        $roles = $request['roles'];
        if (isset($roles)) {        
            $user->roles()->sync($roles);            
        }        
        else {
            $user->roles()->detach();
        }

        return redirect()
            ->route('users.index')
            ->with('flash_message', 'Usuário cadastrado com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $title = 'Exclusão de Usuário';
        $user = User::findOrFail($id);
        return view('painel.users.show', compact('title', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $title = 'Alteração de Usuário';
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('painel.users.create_edit', compact('title', 'user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'
        ]);

    //    $dataform = $request->only('name', 'email', 'password'); 
    //    $user->update($dataform);
        $dataform = $request->only('name', 'email', 'password'); 
        $dataform['password'] = bcrypt($dataform['password']);
        $user->update($dataform);

        $roles = $request['roles'];
        if (isset($roles)) {        
            $user->roles()->sync($roles);            
        }        
        else {
            $user->roles()->detach();
        }

        return redirect()
            ->route('users.index')
            ->with('flash_message', 'Usuário alterado com sucesso !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $delete = $user->delete();
        if ($delete)
            return redirect()
                ->route('users.index')
                ->with('flash_message','Usuário excluído com sucesso !');
        else
            return redirect()
                ->route('users.show', $id)
                ->with(['errors' => 'Falha ao excluir usuário !']);
    }
}
