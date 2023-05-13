<?php
namespace src\clas;

class ClassInterfaceIPCalculator
{
    public $nomer10to2;
    public $maska;
    public $ip10To2;
    public $ip;
    private $first;

    public function __construct()
    {
        $this->nomer10to2 = new Nomer10to2;
        $this->maska = new Maska;
        $this->ip10To2 = new Ip10To2;
        new Ip($this);
        $this->first = new FirstAddress($this);
    }

    public function interfaceIPCalculatorGroups()
    {
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////\\\
        $ContrlSession = new \src\ValueObject\ControlSession();
        if ($ContrlSession->showUserMenu()) {
        // интерфейс выбора вычислений айпишников по группам А,B ...
        echo '<div class="interface-ip-calculator-div">
                  <form action="IPCalculator.php" method="post">
                      <p class="IP-Groups-p">Выбрать класс сети</p>
                      <div class="select-IP-Groups-div">
                      <select name="IP_From_Group" class="select-IP-Groups">
                          <option value="A">Класc A</option>
                          <option value="B">Класс B</option>
                          <option value="C">Класс C</option>
                          <option value="D">Класс D</option>
                          <option value="E">Класс E</option>
                      </select>
                      </div>
                      <input class="button-IP-Groups btn" name="button-IP-Groups" type="submit" value="Показать характеристики">
                  </form>
              </div>';
        } else if ($_SESSION['button-IP-Groups']=='A' || $_SESSION['button-IP-Groups']=='B'
                || $_SESSION['button-IP-Groups']=='C' || $_SESSION['button-IP-Groups']=='D'
                || $_SESSION['button-IP-Groups']=='E') {
            echo '<h3>Параметры сети класса '.$_SESSION['button-IP-Groups'].'</h3>
                  <p>Все адресное пространство занимает 32 бита. Записывается в десятичном виде и состоит из 4 однобайтовых чисел, разделенных точкой, однако компьютер их принимает как 32 бита одним значением.</p>';
            
            if ($_SESSION['button-IP-Groups']=='A') {
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
                echo '<div class="network-parameter">
                          <p>Сеть данного класса маркируется единицей, единицей, единицей и нулем в первых четырех битах (1110) данного 32-битного числа.</p>
                          <p>Сеть находится в адресном пространстве 224.0.0.0-239.255.255.255</p>
                          <p>Используются адреса для многоадресной рассылки multicast</p>
                      </div>';

            }

            if ($_SESSION['button-IP-Groups']=='E') {
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
        $ContrlSession = new \src\ValueObject\ControlSession();
        if ($ContrlSession->showUserMenu()) {
            echo '<div class="IPV4-CIDR">
                     <form action="IPCalculator.php" method="post">
                         <h3>IPV4 CIDR</h3>
                         <p>IP адрес</p>
                         <input type="text" name="ipS1" placeholder="0" class="ipS">
                         <input type="text" name="ipS2" placeholder="0" class="ipS">
                         <input type="text" name="ipS3" placeholder="0" class="ipS">
                         <input type="text" name="ipS4" placeholder="0" class="ipS">
                         <span> / </span>
                         <input type="text" name="ipSmask" placeholder="0" class="ipS">
                         <input type="submit" name="ipSSIDR" value="Считаем" class="button-ipS btn">
                         <br><br>
                         <p>Маска сети в виде 4 байт</p>
                         <input type="text" name="mask1" placeholder="0" class="ipS">
                         <input type="text" name="mask2" placeholder="0" class="ipS">
                         <input type="text" name="mask3" placeholder="0" class="ipS">
                         <input type="text" name="mask4" placeholder="0" class="ipS">
                     </form>
                  </div>';
        } else if ($_SESSION['ipSSIDR']==0) {

            new Mask4BytTo32Bit;
            
            echo '<p>Вы проверяете адрес: '.$this->ip.'</p>';

            echo '<p>Двоичная маска подсети: '.$this->maska->maska2().'</p>';

            echo '<p>Десятичная маска подсети: '.$this->maska->maska10($this->maska->maska2()).'</p>';

            echo '<p>Адрес сети: '.$this->networkAddressByMaskAndIp($this->ip10To2->ip10To2($this->ip),$this->maska->maska2()).'</p>';

            echo '<p>Первый адрес в сети: '.$this->first->firstAddress($this->networkAddressByMaskAndIp($this->ip10To2->ip10To2($this->ip),$this->maska->maska2())).'</p>';

            echo '<p>Число хостов в сети: '.NumerHost::createNumerHost()->numerHost().'<p>';

            echo '<p>Последний адрес в сети: '.$this->first->firstAddress($this->networkAddressByMaskAndIp($this->ip10To2->ip10To2($this->ip),$this->maska->maska2()),NumerHost::createNumerHost()->numerHost()).'</p>';

            echo '<p>Широковещательный адрес в сети: '.$this->first->firstAddress($this->networkAddressByMaskAndIp($this->ip10To2->ip10To2($this->ip),$this->maska->maska2()),(1+NumerHost::createNumerHost()->numerHost())).'</p>';
            
            echo '<form action="IPCalculator.php" method="post">
                      <input type="submit" name="ipSSIDRreset" value="Вернуться" class="button-ipS btn">
                  </form>';
        }
    }




    


    // функция узнает адрес сети по маске и IP адресу хоста
    function networkAddressByMaskAndIp($ip,$mask)
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
         return $this->maska->maska10($adres);
    }



    
    // функция возвращает число хостов в сети, отнимая от 32-х число битов, 
    // выделенных под адрес сети
    //NumerHost::createNumerHost()->numerHost()
}
