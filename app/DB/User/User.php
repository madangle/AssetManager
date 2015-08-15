<?php

namespace App\DB\User;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Http\Requests\Auth\RegisterRequest;
use App\DB\User\Traits\UserACL;
use App\DB\User\Traits\UserAccessors;
use App\DB\User\Traits\UserQueryScopes;
use App\DB\User\Traits\UserRelationShips;

class Users extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

	protected $fillable = array('name', 'email', 'password');

    /**
     * Application's Traits (Separation of various types of methods)
     */
    use UserACL, UserRelationShips;
}