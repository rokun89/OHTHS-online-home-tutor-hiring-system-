<?php

namespace App\Models;

use App\Models\Tutors;
use App\Models\Classes;
use App\Models\Subjects;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tutions extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function class(){
        return $this->belongsTo(Classes::class,'class_id','id');
    }
    public function subject(){
        return $this->belongsTo(Subjects::class,'subject_id','id');
    }
    public function tutor(){
        return $this->belongsTo(User::class,'tutor_id','id');
    }

}
