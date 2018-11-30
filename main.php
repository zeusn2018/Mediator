<?php

include_once "FacebookMediator.php";
include_once "Notifier.php";
include_once "Commenter.php";
include_once "Mailer.php";
include_once "EntityManager.php";

//Supongamos que el pseudo usuario utilizado aquí es konnetrofast13. la "@" es la etiqueta
$message = " Hello @konnetofast13 , diviertete con este video :)";
//$message1 = " Hello @Efrain , diviertete con este video :)";

$commenter = new Commenter();

new FacebookMediator(new Notifier() , new Mailer() , $commenter , new EntityManager());


$commenter->comment($message);
//$commenter->comment($message1);



