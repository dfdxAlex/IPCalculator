<?php
namespace src\clas;

/**
 * The class is almost a wrapper, it either displays an interface for the user,
 * or displays information on various previously selected types of networks
 * Класс почти обёртка, он либо выводит интерфейс для пользователя, 
 * либо выводит информацию по различным, выбранным ранее, типас сетей
 */

class ClassInterfaceIPCalculator
{
    public function interfaceIPCalculatorGroups()
    {
        $interfaceTrueFalse = new InterfaceForUser;
        if ($interfaceTrueFalse->showUserMenu()) 
            echo $interfaceTrueFalse;
        else 
            FactoryGroup::createGroup();
    }
}
