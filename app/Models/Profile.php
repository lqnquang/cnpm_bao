<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'fullname',
        
    ];

    /* 
    protected $primaryKey = 'profile_id';
    protected $incrementing = false;
    protected $keyType = 'string';
    */

    public function follower(){
        return $this->belongsToMany(User::class);
    }
}
