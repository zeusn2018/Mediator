<?php

include_once "FacebookMediatorInterface.php";

class FacebookMediator implements FacebookMediatorInterface
{
    /**
     * @var Notifier
     */
    protected $_notifier ;
    /**
     * @var Mailer
     */
    protected $_mailer ;
    /**
     * @var Commenter
     */
    protected $_comment ;


    protected $_entityManager;

    public function __construct(Notifier $notifier , Mailer $mailer , Commenter $commenter , EntityManager $entityManager)
    {
        $this->_notifier      = $notifier;
        $this->_mailer        = $mailer;
        $this->_comment       = $commenter;
        $this->_entityManager = $entityManager;

        //setting mediator for the notifier , commenter and mailer class
        $this->_notifier->setMediator($this);
        $this->_mailer->setMediator($this);
        $this->_comment->setMediator($this);
        $this->_entityManager->setMediator($this);
    }

    /**
     * @param $message
     * @return mixed|void
     */
    public function comment($message)
    {
        $this->_comment->comment($message);
    }

    /**
     * @param $user
     * @return mixed|void
     */
    public function mailer($user)
    {
        $this->_mailer->sendMail($user);
    }

    /**
     * @param $user
     * @return mixed|void
     */
    public function notifier($user)
    {
        $this->_notifier->sendNotification($user);
    }

    /**
     * @param $pseudo
     * @return mixed|void
     */
    public function findUserByPseudo($pseudo)
    {
        return $this->_entityManager->findUserByPseudo($pseudo);
    }


}