<?php

 abstract class FacebookColleague
{
     /**
      * @var
      * the mediator object that will manage communication between class
      */
    protected  $_mediator;

     /**
      * @param FacebookMediatorInterface $mediator
      * setting mediator for children class
      */
    public function setMediator(FacebookMediatorInterface $mediator){

        $this->_mediator = $mediator;
    }
}