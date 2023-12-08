<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class BaseModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeActive(Builder $query): void
    {
        $query->where('del_flg', '0');
    }
}
