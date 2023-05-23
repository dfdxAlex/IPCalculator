<?php
namespace src\clas;

class GroupC
{
    public function __toString()
    {
        return '<div class="network-parameter">
        <p>Сеть данного класса маркируется единицей, единицей и нулем в первых трех 
           битах (110) данного 32-битного числа.</p>
        <p>Остальные 29 бит содержат информацию об адресе самой сети и о конкретном 
           хосте(компьютере)</p>
        <p>Адрес данной сети задается первыми тремя байтами, а так, как его первые 
           три бита заняты всегда, то для определения адреса остается 21 бит или 2 097 152 
           различных адресов.</p>
        <p>Оставшееся 1 число или 8 бит задают адрес хоста. Хостов в данной сети может 
           быть 256</p>
        <h4>Резюме:</h4>
        <p>Число сетей типа C с адресами IPv4 может быть 2 097 152</p>
        <p>Число хостов или пользователей в сети типа C с адресами IPv4 может быть 256</p>
    </div>';
    }
}