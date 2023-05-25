<?php
namespace src\clas;

/**
 * The class returns the first or last host address
 * Класс возвращает первый или последний адрес хоста
 */

class FirstAddress extends Bit32
{
    private $in;

    public function __construct($in)
    {
        $this->in = $in;
    }

    // Функция возвращает первый доступный адрес хоста добавляя единицу к адресу сети 
    // если не подавать число хостов
    // если подать в переменную $hostov число хостов в сети, то получим 
    // последний адрес сети
    public function firstAddress($adsress, $hostov=1)
    {
        $address2=$this->in->ip10To2->ip10To2($adsress);
        $nomer=0;

        // переводим двоичный адрес в десятичный, чтобы добавить единицу
        for ($i=1; $i<33; $i++) 
             if (substr($address2,$i-1,1)=='1') 
                 $nomer+=$this->bit32($i);

        if ($nomer>4294967294) 
            return 'В этой сети нет свободных адресов:)';

        // добавляем единицу - это будет первый адрес в сети
        $nomer=$nomer+$hostov;

        return $this
               ->in
               ->maska
               ->maska10($this
                         ->in
                         ->nomer10to2
                         ->nomer10to2($nomer, 32));
    }
}
