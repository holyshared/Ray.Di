<?php

namespace Ray\Di\Definition;

use Ray\Di\Mock\DbInterface,
    Ray\Di\Mock\UserInterface;

class OptionalInject
{
    /**
     * @var DbInterface
     */
    public $userDb = 'NOT_INJECTED';


    /**
     * @Inject(optional = true)
     * @Named("user_db")
     *
     * @param DbInterface $db
     *
     */
    public function setUserDb(DbInterface $db)
    {
        $this->userDb = $db;
    }

}