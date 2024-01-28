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
                    You are checking the address: $this->ip
                  </p>";

            echo "<p>
                    Binary subnet mask: 
                    {$this->maska->maska2()}
                  </p>";

            echo "<p>
                   Decimal subnet mask: 
                   {$this->maska->maska10($this->maska->maska2())}
                  </p>";

            $maska2 = $this->network->networkAddressByMaskAndIp(
                      $this->ip10To2->ip10To2($this->ip),
                      $this->maska->maska2());
            echo "<p>
                    Network address: 
                    $maska2
                  </p>";

            $maska2 = $this->first->firstAddress(
                          $this->network->networkAddressByMaskAndIp(
                              $this->ip10To2->ip10To2($this->ip),
                              $this->maska->maska2()
                          )
                       );
            echo "<p>
                    First address on the network: 
                    $maska2
                  </p>";

            $numerHost = NumerHost::createNumerHost()->numerHost();
            echo "<p>
                    Number of hosts on the network: 
                    $numerHost
                  </p>";

            echo '<p>Last address on the network: '
                   .$this->first->firstAddress(
                        $this->network->networkAddressByMaskAndIp(
                            $this->ip10To2->ip10To2($this->ip),
                            $this->maska->maska2()
                        ),
                        NumerHost::createNumerHost()->numerHost()
                    ).
                  '</p>';

            echo '<p>
                    Broadcast address on the network: '.
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
                      value="Return" 
                      class="button-ipS btn"
                    >
                  </form>';
        }
    }
}
