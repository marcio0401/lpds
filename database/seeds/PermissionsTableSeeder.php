<?php

use Illuminate\Database\Seeder;
use Chronos\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'users-visualizar',
                'description' => 'Visalizar o módulo de usuários',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'users-cadastrar',
                'description' => 'Habilitar/Desabilitar o botão de cadastro do módulo de usuários',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name' => 'users-alterar',
                'description' => 'Habilitar/Desabilitar o botão de alteração do módulo de usuários',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'users-excluir',
                'description' => 'Habilitar/Desabilitar o botão de exclusão do módulo de usuários',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'roles-visualizar',
                'description' => 'Visalizar o módulo de perfis',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'roles-cadastrar',
                'description' => 'Habilitar/Desabilitar o botão de cadastro do módulo de perfis',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name' => 'roles-alterar',
                'description' => 'Habilitar/Desabilitar o botão de alteração do módulo de perfis',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'roles-excluir',
                'description' => 'Habilitar/Desabilitar o botão de exclusão do módulo de usuários perfis',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'permissions-visualizar',
                'description' => 'Visalizar o módulo de permissões',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'permissions-cadastrar',
                'description' => 'Habilitar/Desabilitar o botão de cadastro do módulo de permissões',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name' => 'permissions-alterar',
                'description' => 'Habilitar/Desabilitar o botão de alteração do módulo de permissões',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'permissions-excluir',
                'description' => 'Habilitar/Desabilitar o botão de exclusão do módulo de permissões',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'posts-visualizar',
                'description' => 'Visalizar o módulo de posts',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'posts-cadastrar',
                'description' => 'Habilitar/Desabilitar o botão de cadastro do módulo de posts',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name' => 'posts-alterar',
                'description' => 'Habilitar/Desabilitar o botão de alteração do módulo de posts',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'posts-excluir',
                'description' => 'Habilitar/Desabilitar o botão de exclusão do módulo de posts',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],


        ]);
    }
}
