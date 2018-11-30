<?php

class User
{
    /**
     * @var
     */
    protected $_pseudo ;

    /**
     * @var
     */
    protected $_email ;

    /**
     * User constructor.
     * @param $pseudo
     * @param $email
     */
    public function __construct($pseudo , $email)
    {
        $this->_pseudo = $pseudo;
        $this->_email  = $email;
    }

    /**
     * @param $name
     */
    public function __get($name)
    {
        if(property_exists(get_class($this),$name)){
            return $this->$name;
        }
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        if(property_exists(get_class($this),$name)){
            $this->$name = $value;
        }
    }
}