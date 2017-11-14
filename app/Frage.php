<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frage extends Model
{

  protected $table = 'fragen';

  protected $primaryKey = 'pk_frageID';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'frage', 'option1', 'option2', 'option3', 'option4',
  ];



}
