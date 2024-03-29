<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $guard = 'member';

    protected $guarded =[];
}
