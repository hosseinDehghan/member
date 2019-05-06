<?php

namespace Hosein\Members;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    protected $fillable=[
        'id',
        'name',
        'email',
        'password',
        'email_verified_at',
    ];
}
