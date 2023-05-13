<?php
namespace src\clas;

class ClassInterfaceIPCalculator
{
    public $nomer10to2;
    public $maska;
    public $ip10To2;
    public $ip;
    private $first;
    private $network;
    private $interfaceTrueFalse;

    public function __construct()
    {
        $this->nomer10to2 = new Nomer10to2;
        $this->maska = new Maska;
        $this->ip10To2 = new Ip10To2;
        new Ip($this);
        $this->first = new FirstAddress($this);
        $this->network = new NetworkAddressByMaskAndIp;
        $this->interfaceTrueFalse = new InterfaceForUser;
    }

    public function interfaceIPCalculatorGroups()
    {//echo $this->interfaceTrueFalse;
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////\\\
        if ($this->interfaceTrueFalse->showUserMenu()) {
            echo $this->interfaceTrueFalse;

        } else {
            if ($_SESSION['button-IP-Groups']=='A') {
                echo new TextStart;
                echo '<div class="network-parameter">
                          <p>Сеть данного класса маркируется нулем в первом бите данного 32-битного числа.</p>
                          <p>Остальные 31 бит содержат информацию об адресе самой сети и о конкретном хосте(компьютере)</p>
                          <p>Адрес данной сети задается первым байтом, а так, как его первый бит занят нулем всегда, то для определения адреса остается 7 бит или 127 различных адресов.</p>
                          <p>Остальные 3 числа или 24 бита задают адрес хоста. Хостов в данной сети может быть 16 777 216</p>
                          <h4>Резюме:</h4>
                          <p>Число сетей типа A с адресами IPv4 может быть 127</p>
                          <p>Число хостов или пользователей в сети типа A с адресами IPv4 может быть 16 777 216</p>
                      </div>';
            }

            if ($_SESSION['button-IP-Groups']=='B') {
                echo new TextStart;
                echo '<div class="network-parameter">
                          <p>Сеть данного класса маркируется единицей и нулем в первых двух битах (10) данного 32-битного числа.</p>
                          <p>Остальные 30 бит содержат информацию об адресе самой сети и о конкретном хосте(компьютере)</p>
                          <p>Адрес данной сети задается первыми двумя байтами, а так, как его первые два бита заняты всегда, то для определения адреса остается 14 бит или 16 384 различных адресов.</p>
                          <p>Остальные 2 числа или 16 бит задают адрес хоста. Хостов в данной сети может быть 65 536</p>
                          <h4>Резюме:</h4>
                          <p>Число сетей типа B с адресами IPv4 может быть 16 384</p>
                          <p>Число хостов или пользователей в сети типа B с адресами IPv4 может быть 65 536</p>
                      </div>';
            }

            if ($_SESSION['button-IP-Groups']=='C') {
                echo new TextStart;
                echo '<div class="network-parameter">
                          <p>Сеть данного класса маркируется единицей, единицей и нулем в первых трех битах (110) данного 32-битного числа.</p>
                          <p>Остальные 29 бит содержат информацию об адресе самой сети и о конкретном хосте(компьютере)</p>
                          <p>Адрес данной сети задается первыми тремя байтами, а так, как его первые три бита заняты всегда, то для определения адреса остается 21 бит или 2 097 152 различных адресов.</p>
                          <p>Оставшееся 1 число или 8 бит задают адрес хоста. Хостов в данной сети может быть 256</p>
                          <h4>Резюме:</h4>
                          <p>Число сетей типа C с адресами IPv4 может быть 2 097 152</p>
                          <p>Число хостов или пользователей в сети типа C с адресами IPv4 может быть 256</p>
                      </div>';

            }

            if ($_SESSION['button-IP-Groups']=='D') {
                echo new TextStart;
                echo '<div class="network-parameter">
                          <p>Сеть данного класса маркируется единицей, единицей, единицей и нулем в первых четырех битах (1110) данного 32-битного числа.</p>
                          <p>Сеть находится в адресном пространстве 224.0.0.0-239.255.255.255</p>
                          <p>Используются адреса для многоадресной рассылки multicast</p>
                      </div>';
            }

            if ($_SESSION['button-IP-Groups']=='E') {
                echo new TextStart;
                echo '<div class="network-parameter">
                          <p>Сеть данного класса маркируется единицей, единицей, единицей и нулем в первых четырех битах (1111) данного 32-битного числа.</p>
                          <p>Сеть находится в адресном пространстве 240.0.0.0-255.255.255.255</p>
                          <p>Зарегистрированы для будущего использования</p>
                      </div>';
            }

            // показать кнопку сбросса
            echo '<div class="interface-ip-calculator-div">
                      <form action="IPCalculator.php" method="post">
                          <input class="button-IP-Groups btn" name="button-IP-Groups-reset" type="submit" value="Вернуться к выбору">
                      </form>
                  </div>';
        }
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////\\\
    }

    public function interfaceIPCalculatorCIDR()
    {
        if ($this->interfaceTrueFalse->showUserMenu()) ;
        
        else if ($_SESSION['ipSSIDR']==0) {

            new Mask4BytTo32Bit;
            
            echo '<p>Вы проверяете адрес: '.$this->ip.'</p>';

            echo '<p>Двоичная маска подсети: '.$this->maska->maska2().'</p>';

            echo '<p>Десятичная маска подсети: '.$this->maska->maska10($this->maska->maska2()).'</p>';

            echo '<p>Адрес сети: '.$this->network->networkAddressByMaskAndIp($this->ip10To2->ip10To2($this->ip),$this->maska->maska2()).'</p>';

            echo '<p>Первый адрес в сети: '.$this->first->firstAddress($this->network->networkAddressByMaskAndIp($this->ip10To2->ip10To2($this->ip),$this->maska->maska2())).'</p>';

            echo '<p>Число хостов в сети: '.NumerHost::createNumerHost()->numerHost().'<p>';

            echo '<p>Последний адрес в сети: '.$this->first->firstAddress($this->network->networkAddressByMaskAndIp($this->ip10To2->ip10To2($this->ip),$this->maska->maska2()),NumerHost::createNumerHost()->numerHost()).'</p>';

            echo '<p>Широковещательный адрес в сети: '.$this->first->firstAddress($this->network->networkAddressByMaskAndIp($this->ip10To2->ip10To2($this->ip),$this->maska->maska2()),(1+NumerHost::createNumerHost()->numerHost())).'</p>';
            
            echo '<form action="IPCalculator.php" method="post">
                      <input type="submit" name="ipSSIDRreset" value="Вернуться" class="button-ipS btn">
                  </form>';
        }
    }

    // функция возвращает число хостов в сети, отнимая от 32-х число битов, 
    // выделенных под адрес сети
    //NumerHost::createNumerHost()->numerHost()
}
