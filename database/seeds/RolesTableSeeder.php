<?php

use Illuminate\Database\Seeder;
use Chronos\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'ADMIN',
                'description' => 'Administrador do sistema',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'USER',
                'description' => 'Usuário do sistema',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
        ]);
    }
}
