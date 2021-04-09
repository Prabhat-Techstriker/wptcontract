<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;

class ProjectType extends Model
{
    use Notifiable;
    use HasRoles;
    protected $fillable = ['project_name', 'project_description'];

}
