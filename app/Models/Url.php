<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Url extends Model
{
    //use HasFactory;
    protected $fillable = ['original_url','shortner_url'];

    protected static function boot()
    {

        parent::boot();
        static::creating(function($url){
            $url->shortner_url = Str::random();
        });
    }
}
