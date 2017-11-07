<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

  protected $primaryKey = 'pk_tagid';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'tagname',
  ];

  public function videos(){

    return $this->belongsToMany('Video', 'tag_videos', 'pk_tagid', 'fk_tagid');

  }

}
