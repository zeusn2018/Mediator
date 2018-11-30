<?php

interface  FacebookMediatorInterface
{
    /**
     * @param $message
     * @return mixed
     * the comment method
     */
  public function comment($message);

    /**
     * @param $user
     * @return mixed
     * notify the user about the comment if he name tag exist in the message of the comment
     * we suppose that only one user name tag exist in the comment
     */
  public function notifier($user);

    /**
     * @param $user
     * @return mixed
     * send mail  the the user box
     */
  public function mailer($user);

    /**
     * @param $pseudo
     * @return mixed
     *  fetch the user from db
     */
  public function findUserByPseudo($pseudo);

}