<?php
namespace src\clas;

class GroupC
{
    public function __toString()
    {
      return '<div class="network-parameter">
      <p>
         In this class, the network is marked by three bits: one, one, and zero (110) of this 32-bit number.
      </p>
      <p>
         The remaining 29 bits contain information about the network address and a specific host (computer).
      </p>
      <p>
         The network address is determined by the first three bytes, and since the first three bits are always occupied, there are 21 bits or 2,097,152 different addresses available for network addressing.
      </p>
      <p>
         The remaining 1 number or 8 bits define the host address. In this network, there can be 256 hosts.
      </p>
      <h4>Summary:</h4>
      <p>
         The number of Class C networks with IPv4 addresses can be 2,097,152.
      </p>
      <p>
         The number of hosts or users in a Class C network with IPv4 addresses can be 256.
      </p>
    </div>';

    }
}
