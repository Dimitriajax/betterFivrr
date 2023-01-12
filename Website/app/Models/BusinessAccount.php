<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'address',
        'zipcode',
        'country',
        'sector',
        'country',
        'about',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}