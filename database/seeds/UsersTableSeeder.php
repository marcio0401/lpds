<?php

use Illuminate\Database\Seeder;
use Chronos\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Márcio Diniz',
                'email' => 'marcio0401@gmail.com',
                'password' => bcrypt('541980'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Katicia Diniz',
                'email' => 'katiucia@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Alice Diniz',
                'email' => 'alice@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],                        
        ]);
    }
}
