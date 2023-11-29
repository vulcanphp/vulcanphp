<?php

use App\Models\User;
use VulcanPhp\Core\Database\Interfaces\ISeeder;

return new class implements ISeeder
{
    public function seed(): void
    {
        User::create([
            [
                'id'       => 1,
                'name'     => 'Super Admin',
                'username' => 'admin',
                'email'    => 'admin@gmail.com',
                'password' => password('admin'),
                'role'     => 'admin',
                'status'   => config('auth.status.activated'),
            ]
        ], ['ignore' => true]);
    }
};
