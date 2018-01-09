<?php

namespace App\Http\Controllers;

use App\Frage;
use Illuminate\Http\Request;

class FrageController extends Controller
{

  public function getQuestion($id){

    return Frage::findOrFail($id);

  }

  /**PARAMS
  * $id -> ID of the question
  * $selection -> the answer's id, as selected by user.
  **/
  public function checkAnswer($selection, $id){

    $result = if(Frage::find($id)->option1 == $selection);

    return $result;

  }

  /**PARAMS
  * $user -> the user answering the question
  * $id -> the ID of the question he is answering.
  * $selection -> response given by the user. ('option')
  **/
  public function writeResult($user, $id, $selection){

    $target = User::find($user);

    if($this->checkAnswer($selection, $id)){
      $target->fragen()->updateExistingPivot($id, true);
    }

    $target->fragen()->updateExistingPivot($id, false);

  }

  /**PARAMS
  * $frage -> the question proper
  * $o1 -> the first option. Should be the true answer.
  * $o2 -> second option. Should be false.
  * $o3 -> etc...
  **/
  public function newQuestion($frage, $o1, $o2, $o3, $o4){

    Frage::create(['frage' => $frage,
                   'option1' => $o1,
                   'option2' => $o2,
                   'option3' => $o3,
                   'option4' => $o4,
                 ]);

  }

  public function deleteQuestion($id){

    Frage::destroy($id);

  }

}
