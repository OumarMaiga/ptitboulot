<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'slug',
        'name',
        'contact',
        'email',
        'address',
        'category',
        'overview',
        'worktime',
        'budget',
        'state',
        'archive',
        'company_id',
        'user_id',
    ];
}