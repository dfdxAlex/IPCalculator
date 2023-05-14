<?php
namespace src\clas;

class FactoryGroup
{
    static public function createGroup()
    {
        if ($_SESSION['button-IP-Groups']!='z') {
            echo new TextStart;
            $obj = new ButtonReturn;
        }

        if ($_SESSION['button-IP-Groups']=='A') 
            echo new GroupA.$obj;

        if ($_SESSION['button-IP-Groups']=='B') 
            echo new GroupB.$obj;

        if ($_SESSION['button-IP-Groups']=='C') 
            echo new GroupC.$obj;

        if ($_SESSION['button-IP-Groups']=='D') 
            echo new GroupD.$obj;

        if ($_SESSION['button-IP-Groups']=='E') 
            echo new GroupE.$obj;
    }
}
