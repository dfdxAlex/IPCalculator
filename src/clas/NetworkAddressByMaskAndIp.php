<?php
namespace src\clas;

class NetworkAddressByMaskAndIp extends Maska
{
    // the function learns the network address from the mask 
    // and IP address of the host
    // функция узнает адрес сети по маске и IP адресу хоста
    public function networkAddressByMaskAndIp($ip,$mask)
    {
         $ip=str_replace(' ','',$ip);
         $mask=str_replace(' ','',$mask);
         $adres='';
         for ($i=1; $i<33; $i++) {
             if (substr($ip,$i-1,1)=='1' 
                 && substr($mask,$i-1,1)=='1') 
                     $adres.='1'; 
             else $adres.='0';
         }
         return $this->maska10($adres);
    }
}
