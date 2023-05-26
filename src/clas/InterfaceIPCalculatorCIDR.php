<?php
namespace src\clas;

class InterfaceIPCalculatorCIDR
{
    public $ip;
    public $maska;
    public $ip10To2;
    private $network;
    private $first;
    private $interfaceTrueFalse;
    public $nomer10to2;

    public function __construct()
    {
        new Ip($this);
        $this->maska = new Maska;
        $this->ip10To2 = new Ip10To2;
        $this->network = new NetworkAddressByMaskAndIp;
        $this->first = new FirstAddress($this);
        $this->interfaceTrueFalse = new InterfaceForUser;
        $this->nomer10to2 = new Nomer10to2;
    }
    public function interfaceIPCalculatorCIDR()
    {
        if ($this->interfaceTrueFalse->showUserMenu()) ;
        
        else if ($_SESSION['ipSSIDR']==0) {
            new Mask4BytTo32Bit;
            echo "<p>
                    Вы проверяете адрес: $this->ip
                  </p>";

            echo "<p>
                    Двоичная маска подсети: 
                    {$this->maska->maska2()}
                  </p>";

            echo "<p>
                   Десятичная маска подсети: 
                   {$this->maska->maska10($this->maska->maska2())}
                  </p>";

            $maska2 = $this->network->networkAddressByMaskAndIp(
                      $this->ip10To2->ip10To2($this->ip),
                      $this->maska->maska2());
            echo "<p>
                    Адрес сети: 
                    $maska2
                  </p>";

            $maska2 = $this->first->firstAddress(
                          $this->network->networkAddressByMaskAndIp(
                              $this->ip10To2->ip10To2($this->ip),
                              $this->maska->maska2()
                          )
                       );
            echo "<p>
                    Первый адрес в сети: 
                    $maska2
                  </p>";

            $numerHost = NumerHost::createNumerHost()->numerHost();
            echo "<p>
                    Число хостов в сети: 
                    $numerHost
                  </p>";

            echo '<p>Последний адрес в сети: '
                   .$this->first->firstAddress(
                        $this->network->networkAddressByMaskAndIp(
                            $this->ip10To2->ip10To2($this->ip),
                            $this->maska->maska2()
                        ),
                        NumerHost::createNumerHost()->numerHost()
                    ).
                  '</p>';

            echo '<p>
                    Широковещательный адрес в сети: '.
                    $this->first->firstAddress(
                        $this->network->networkAddressByMaskAndIp(
                            $this->ip10To2->ip10To2($this->ip),
                            $this->maska->maska2()
                        ),
                        (
                            1+NumerHost::createNumerHost()->numerHost()
                        )
                    ).'</p>';
            
            echo '<form 
                    action="IPCalculator.php" 
                    method="post"
                  >
                    <input 
                      type="submit" 
                      name="ipSSIDRreset" 
                      value="Вернуться" 
                      class="button-ipS btn"
                    >
                  </form>';
        }
    }
}
