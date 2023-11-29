<?php

namespace App\Models;

use VulcanPhp\SimpleDb\Model;

class UserMeta extends Model
{
    public static function tableName(): string
    {
        return 'usermeta';
    }

    public static function primaryKey(): string
    {
        return 'id';
    }

    public static function fillable(): array
    {
        return ['user', 'meta_key', 'value'];
    }

    public function rules(): array
    {
        return [
            'user'     => [self::RULE_REQUIRED],
            'meta_key' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 50]],
            'value'    => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 250]],
        ];
    }

    public static function saveMeta(array $meta,  int $user): bool
    {
        $status = [];

        foreach ($meta as $key => $value) {
            if (parent::find(['user' => $user, 'meta_key' => $key]) !== false) {
                $status[] = (bool) parent::put(['value' => $value], ['user' => $user, 'meta_key' => $key]);
            } else {
                $status[] = (bool) parent::create(['user' => $user, 'meta_key' => $key, 'value' => $value]);
            }
        }

        return in_array(true, $status);
    }

    public static function getMeta(int $user)
    {
        return parent::select()
            ->where(['user' => $user])
            ->get()
            ->mapWithKeys(fn ($meta) => [$meta->meta_key => $meta->value]);
    }

    public static function removeMeta($meta, int $user): bool
    {
        $status = [];

        foreach ($meta as $key) {
            $status[] = parent::erase(['user' => $user, 'meta_key' => $key]);
        }

        return in_array(true, $status);
    }

    public static function getUserByMeta(string $key, string $value)
    {
        return User::select('p.*')
            ->join(
                UserMeta::class,
                sprintf(
                    "t1.user = p.id AND t1.meta_key = '%s' AND t1.value = '%s'",
                    $key,
                    $value
                )
            )
            ->limit(1)
            ->first();
    }
}
