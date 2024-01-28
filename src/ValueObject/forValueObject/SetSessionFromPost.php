<?php
namespace src\ValueObject\forValueObject;

/**
 * refactoring 13.09.2023
 */

class SetSessionFromPost
{
    protected function setSessionFromPostForIp()
    {
        if (isset($_POST['ipS1']))
            for ($i=1; $i<5; $i++) {
                $_SESSION['ip'.$i]=0;
                $rez1 = $_POST['ipS'.$i]>-1;
                $rez2 = $_POST['ipS'.$i]<256;
                if ($rez1 && $rez2) {
                    $_SESSION['ip'.$i]=$_POST['ipS'.$i]; 
                }
            }
    }

    protected function setSessionButtonIpGroupsFromPost()
    {
        if (isset($_POST['button-IP-Groups'])) {
            $_SESSION['button-IP-Groups']=$_POST['IP_From_Group'];
        }
    }

    protected function setSessionIpMaskFromPost()
    {
        $_SESSION['ipMask']=0;
        if (isset($_POST['ipSmask']))
            if ($_POST['ipSmask']>-1)
                if ($_POST['ipSmask']<33)
                    $_SESSION['ipMask']=$_POST['ipSmask']; 
    }

    protected function setSessionIpSsidr()
    {
        $_SESSION['ipSSIDR']=-1;

        if (isset($_POST['ipSSIDR'])) 
            $_SESSION['ipSSIDR']=0;
    }

    protected function setSessionMaskFromPost()
    {
        if (isset($_POST['mask1']))
            for ($i=1; $i<5; $i++) {
                $_SESSION['mask'.$i]=0;
                if ($_POST['mask'.$i]>-1)
                    if ($_POST['mask'.$i]<256)
                    $_SESSION['mask'.$i]=$_POST['mask'.$i];
            }
    }
}
