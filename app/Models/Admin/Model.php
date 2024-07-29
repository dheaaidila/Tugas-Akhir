<?php

namespace App\Models\Admin;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as BaseModel;


class Model extends BaseModel
{
	protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

}