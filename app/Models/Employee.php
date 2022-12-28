<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
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
		return $this->belongsTo(User::class,'userId','id');
	}
}
