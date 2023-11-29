<?php

namespace App\Models;

use VulcanPhp\SimpleDb\Model;

class User extends Model
{
    public static function tableName(): string
    {
        return 'users';
    }

    public static function primaryKey(): string
    {
        return 'id';
    }

    public function save(bool $force = false)
    {
        if (isset($this->password) && !empty(trim($this->password))) {
            $this->password = password($this->password);
        }

        return parent::save();
    }

    public static function fillable(): array
    {
        $fields = ['name', 'username', 'password', 'email', 'role', 'status'];

        return $fields;
    }

    public function labels(): array
    {
        return [
            'name'  => 'Full Name',
            'email' => 'Email Address',
        ];
    }

    public function getDisplayName(): string
    {
        return isset($this->name) && !empty($this->name) ? $this->name : $this->username;
    }

    public function rules(): array
    {
        return [
            'email'    => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' => self::class]],
            'username' => [self::RULE_REQUIRED, [self::RULE_UNIQUE, 'class' => self::class]],
        ];
    }

    public function meta(?string $key = null, $default = null)
    {
        if (!isset($this->userMeta)) {
            $this->userMeta = UserMeta::Cache()->load($this->id, fn () => UserMeta::getMeta($this->id), '25 minutes');
        }

        return $key !== null ? $this->userMeta->get($key, $default) : $this->userMeta->all();
    }
}
