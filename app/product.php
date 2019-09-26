<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  protected $table = 'category';

  protected $fillable =['name','description','price','stock','picture'];
}
