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
                'name' => 'admin',
                'email' => 'admin@varion.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'user',
                'name' => 'editor',
                'email' => 'editor@varion.com',
                'level' => 'editor',
                'password' => bcrypt('editor123')
            ],
            [
                'username' => 'user2',
                'name' => 'editor2',
                'email' => 'editor2@varion.com',
                'level' => 'editor2',
                'password' => bcrypt('editor123')
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
