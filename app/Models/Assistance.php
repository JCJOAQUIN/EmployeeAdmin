<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'timeliness_id',
        'user_id',
        'check_in',
        'check_out',
    ];
    public function user()
	{
		return $this->hasOne(User::class,'id','user_id');
	}
    public function timeliness()
	{
		return $this->hasOne(Cat_times::class,'id','timeliness_id');
	}
}
