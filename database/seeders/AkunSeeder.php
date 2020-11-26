<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name' => 'ini admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'editor',
                'name' => 'ini editor',
                'email' => 'editor@gmail.com',
                'level' => 'editor',
                'password' => bcrypt('editor123')
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
