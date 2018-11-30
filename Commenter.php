<?php

include_once "FacebookColleague.php";

class Commenter extends FacebookColleague
{

    /**
     * @param $message
     */
    public function comment($message)
    {
        if(($pseudo=$this->checkMessage($message)) !== null){
            echo "<h2> Comment : ".$message."</h2>";
            $user = $this->_mediator->findUserByPseudo($pseudo);
            $this->_mediator->notifier($user);
            $this->_mediator->mailer($user);
        }

    }

    /**
     * @param $message
     * @return null
     * @example  :  Hello @konnetofast13 , have fun with this video :)
     */
    private function checkMessage($message){

        if(preg_match("/@[a-zA-Z0-9]*/", $message , $matches)){
             return $matches[0];
        }
        return null;
    }

}