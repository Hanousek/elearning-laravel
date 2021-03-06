<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

  protected $primaryKey = 'pk_videoID';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'thumbnail', 'thumbnail_alt', 'video', 'thema',
  ];

  public function tags(){

    return $this->belongsToMany('Tag', 'tag_videos', 'pk_videoID', 'fk_videoID');

  }

  public function fragen(){

    return $this->hasMany('fragen', 'fk_VideoID','pk_VideoID');

  }

  public function thema(){

    return $this->belongsTo('themas', 'fk_themaID', 'pk_themaID')

  }

}
