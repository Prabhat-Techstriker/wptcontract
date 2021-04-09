<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;

class Contact extends Model
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['create_by', 'name', 'email','phone','dob','company_name','address','profile_image'];

    
}
