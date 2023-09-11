<?php
namespace src\ValueObject;

// Класс для контроля наличия и управления переменными Сессий
// Klasa do kontroli obecności i zarządzania zmiennymi sesji
// Class to control the presence and manage session variables

use \src\ValueObject\forValueObject\CreateSession;

class ControlSession extends CreateSession
{
    public function __construct()
    {

        $this->setZForButtonIpGroups();

        $this->createIfNotExistsSessionIp();

        $this->createIfNotExistsSessionMask();

        $this->createIfNotExistsSessionMaskAndSsidr();
    }

    public function varSet()
    {
        $this->setSessionButtonIpGroupsFromPost();

        $this->setSessionFromPostForIp();
       
        $this->setSessionIpMaskFromPost();

        $this->setSessionIpSsidr();

        $this->setSessionMaskFromPost();
    }
}
