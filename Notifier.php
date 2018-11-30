<?php

include_once "FacebookColleague.php";

class Notifier extends FacebookColleague
{

  public function sendNotification($user){

      echo " <h3> Notification : hello ".$user->_pseudo."Has sido etiquetado para ver el video de tu amigo </h3>";
  }

}