<?php
namespace src\clas;

class GroupB
{
    public function __toString()
    {
        return '<div class="network-parameter">
        <p>Сеть данного класса маркируется единицей и нулем в первых двух битах (10) 
           данного 32-битного числа.</p>
        <p>Остальные 30 бит содержат информацию об адресе самой сети и о конкретном 
           хосте(компьютере)</p>
        <p>Адрес данной сети задается первыми двумя байтами, а так, как его первые 
           два бита заняты всегда, то для определения адреса остается 14 бит или 16 384 
           различных адресов.</p>
        <p>Остальные 2 числа или 16 бит задают адрес хоста. Хостов в данной сети может 
        быть 65 536</p>
        <h4>Резюме:</h4>
        <p>Число сетей типа B с адресами IPv4 может быть 16 384</p>
        <p>Число хостов или пользователей в сети типа B с адресами IPv4 может быть 65 536</p>
        </div>';
    }
}
