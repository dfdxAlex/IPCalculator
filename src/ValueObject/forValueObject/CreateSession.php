<?php
namespace src\ValueObject\forValueObject;

/**
 * refactoring 13.09.2023
 */

use \src\ValueObject\forValueObject\SetSessionFromPost;

class CreateSession extends SetSessionFromPost
{

    protected function setZForButtonIpGroups()
    {
        $rez1 = !isset($_SESSION['button-IP-Groups']);
        $rez2 = isset($_POST['button-IP-Groups-reset']);
        if ($rez1 || $rez2) {
            $_SESSION['button-IP-Groups']='z';
        }
    }

    protected function createIfNotExistsSessionIp()
    {
        for ($i=1; $i<5; $i++)
            if (!isset($_SESSION['ip'.$i])) 
                $_SESSION['ip'.$i]=0;
    }

    protected function createIfNotExistsSessionMask()
    {
        for ($i=1; $i<5; $i++)
            if (!isset($_SESSION['mask'.$i])) 
                $_SESSION['mask'.$i]=0;
    }

    protected function createIfNotExistsSessionMaskAndSsidr()
    {
        if (!isset($_SESSION['ipMask'])) 
            $_SESSION['ipMask']=0;

        if (!isset($_SESSION['ipSSIDR'])) 
            $_SESSION['ipSSIDR']=-1;
    }
}

