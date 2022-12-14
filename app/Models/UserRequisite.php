<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRequisite extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title_bank',
        'iik',
        'bik',
        'kbe',
        'user_id'
    ];
}
