<?php

namespace App\Http\Controllers;

use App\Frage;
use Illuminate\Http\Request;

class FrageController extends Controller
{

  public function getQuestion($id){

    return Frage::findOrFail($id);

  }

  public function checkAnswer($selection, $id){

    $result = if(Frage::find($id)->option1 == $selection);

    return $result;

  }

  protected function writeResult($user, $id){

    $

  }

}
