<?php
namespace src\clas;

class GroupD
{
    public function __toString()
    {
      return '<div class="network-parameter">
          <p>
            In this class, the network is marked by four bits: one, one, one, and zero (1110) of this 32-bit number.
          </p>
          <p>
            The network is located in the address space 224.0.0.0-239.255.255.255.
          </p>
          <p>
            Addresses in this range are used for multicast transmissions.
          </p>
      </div>';

    }
}
