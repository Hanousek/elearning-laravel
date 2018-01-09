<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Status extends Pivot
{

  protected $table = 'status';

  protected $primaryKey = 'pk_statusID'

  protected $fillable = [
    'fk_userID', 'fk_frageID', 'correct'
  ];



}
