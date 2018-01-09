<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thema extends Model
{

  protected $table = 'themas';

  protected $primaryKey = 'pk_themaID';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title','subtitle'
  ];

  public function videos(){

    return $this->hasMany('App\Videos', 'fk_themaID', 'pk_themaID');

  }
}
