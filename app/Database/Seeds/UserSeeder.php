<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Exactly one demo record, as required.
        (new UserModel())->insert([
            'username'  => 'mclara',
            'full_name' => 'Maria Clara Santos',
            'email'     => 'maria.santos@example.com',
        ]);
    }
}
