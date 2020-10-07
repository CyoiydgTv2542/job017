<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'name', 'agency','fname','lname','rank'
        ,'pnum','numpeople','start_date','end_date','even','pattern','advice'
       ];
}
