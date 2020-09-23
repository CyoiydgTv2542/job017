<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    protected $table = 'advices';
    protected $fillable = [
        'name', 'detail','image',
       ];
}
