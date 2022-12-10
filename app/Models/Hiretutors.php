<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiretutors extends Model
{
    use HasFactory;
    
    protected $guarded=[];
     public function tutor(){
        return $this->belongsTo(User::class,'tutor_id','id');
    }
}
