<?php

use VulcanPhp\Core\Database\Interfaces\IMigration;
use VulcanPhp\Core\Database\Schema\Schema;

return new class implements IMigration
{
    public function up(): string
    {
        return Schema::create('usermeta')
            ->id()
            ->foreignId('user')->constrained('users', 'id')->onUpdate('cascade')->onDelete('cascade')
            ->string('meta_key', 50)->key('meta_key')
            ->string('value', 250)->nullable()
            ->timestamp('updated_at')->onUpdate('CURRENT_TIMESTAMP')
            ->build();
    }

    public function down(): string
    {
        return Schema::drop('usermeta');
    }
};
