<?php

use VulcanPhp\Core\Database\Interfaces\IMigration;
use VulcanPhp\Core\Database\Schema\Schema;

return new class implements IMigration
{
    public function up(): string
    {
        return Schema::create('users')
            ->id()
            ->string('name', 120)->key('name')->nullable()
            ->string('username', 150)->unique()
            ->string('email', 65)->unique()
            ->string('password', 250)
            ->enum('role', config('auth.roles'))->default('user')->key('role')
            ->tinyInteger('status', 6)->key('status')->default(1)
            ->timestamp('created_at')
            ->build();
    }

    public function down(): string
    {
        return Schema::drop('users');
    }
};
