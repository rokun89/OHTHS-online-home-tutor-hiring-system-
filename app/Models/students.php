<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class students extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

   // protected $fillable=['name','email','contact','address','login_pass','status'];


}
