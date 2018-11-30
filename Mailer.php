<?php

include_once "FacebookColleague.php";

class Mailer extends FacebookColleague
{

    public function sendMail(User $user){

        echo "<h5> Mail box : un correo electrónico ha sido enviado a ".$user->_email." </h5>";

    }

}