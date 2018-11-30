<?php

include_once "FacebookColleague.php";
include_once "User.php";
class EntityManager extends FacebookColleague
{

    /**
     * @param $pseudo
     * @return User
     * fetching user from db
     */
    public function findUserByPseudo($pseudo){

        // select the user from DB
        // ...

        return new User("konnetrofast13" , "chablibmohammedyassine@gmail.com");

    }
}