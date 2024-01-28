<?php
namespace src\clas;

class GroupB
{
    public function __toString()
    {
        return '<div class="network-parameter">
        <p>
            In this class, the network is marked by a combination of ones and zeros in the first two bits (10) of this 32-bit number.
        </p>
        <p>
            The remaining 30 bits contain information about the network address and a specific host (computer).
        </p>
        <p>
            The network address is determined by the first two bytes, and since the first two bits are always occupied, there are 14 bits or 16,384 different addresses available for network addressing.
        </p>
        <p>
            The remaining 2 numbers or 16 bits define the host address. In this network, there can be 65,536 hosts.
        </p>
        <h4>Summary:</h4>
        <p>
            The number of Class B networks with IPv4 addresses can be 16,384.
        </p>
        <p>
            The number of hosts or users in a Class B network with IPv4 addresses can be 65,536.
        </p>
    
                </div>';
    }
}
