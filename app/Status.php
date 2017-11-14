<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

  protected $table = 'status';

  protected $primaryKey = 'pk_statusID';


  public function user(){

    return $this->belongsTo('App\User', 'fk_userID', 'pk_userID');

  }

}
