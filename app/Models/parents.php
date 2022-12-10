<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class parents extends Model
{
    use HasFactory, SoftDeletes;

 //protected $fillable=['n_id','name','email','login_pass','address','status','contact','description',''];
    //**In fillable amra je attribute er ktha blbo only sei value gula nibe...kono attribute nah bolle seta nibe nah



    protected $guarded=[];
    //**In guarded amra je attribute er ktha blbo segula badh e sob value gula nibe...kono kicu nah bole dile sob nibe..



}
