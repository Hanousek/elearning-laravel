<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video as Video;

class VideoController extends Controller
{

  public function deleteVideo($id){

    Video::destroy($id);

  }

  /**PARAMS
  * $thumbnail -> filesystem path to thumbnail image.
  * $thumbnail_alt -> filesystem path to alternate thumbnail / plain string description
  * $video -> filesystem path to video
  * $thema -> short description of the video. What is it about?
  * $tags -> an array of tags for the video. Supports only primary keys for now.
  **/
  public function newVideo($thumbnail, $thumbnail_alt, $video, $thema, $tags){

    $video = [$thumbnail, $thumbnail_alt, $video, $thema];

    Video::create($video)->tags()->sync($tags);

  }

  /**PARAMS
  * $id -> the id of the video
  **/
  public function deleteVideo($id){

    Video::destroy($id);

  }

  /**PARAMS
  * $id -> the video's key. | REQUIRED
  * $thumbnail -> video's thumbnail filesystem path.
  * $thumbnail_alt -> video's alternate thumbnail / string description
  * $video -> filesystem path of the video itself
  * $thema -> string description of what the video is about.
  *
  * NOTE: If an attribute is an empty string, it will be omitted.
  **/
  public function alterVideo($id, $thumbnail, $thumbnail_alt, $video, $thema){

    $target = Video::find($id);
    
    $target->thumbnail = $thumbnail;
    $target->thumbnail_alt = $thumbnail_alt;
    $target->video = $video;
    $target->thema = $thema;

    $target->save()

  }


}
