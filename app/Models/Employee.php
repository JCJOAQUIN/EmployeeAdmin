<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employee extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable =
    [
        'clabe',
        'alias',
        'userId',
        'area',
        'department',
        'password',
    ];
    public function user()
	{
		return $this->hasOne(User::class,'id','userId');
	}
}
