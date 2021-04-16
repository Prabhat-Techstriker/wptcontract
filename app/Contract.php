<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;

class Contract extends Model
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['sender_id', 'contract_id','envelopeId','subject', 'message_body', 'file_name', 'file_path'];

    public function contactInfo()
	{
	    return $this->belongsTo('App\Contact', 'contract_id', 'id');
    }	
}
