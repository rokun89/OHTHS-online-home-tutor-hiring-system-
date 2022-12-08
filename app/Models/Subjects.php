<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subjects extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function class(){
        return $this->belongsTo(Classes::class,'class_id','id');
    }
    
}
