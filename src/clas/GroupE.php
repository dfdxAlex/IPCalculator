<?php
namespace src\clas;

class GroupE
{
    public function __toString()
    {
      return '<div class="network-parameter">
        <p>
          In this class, the network is marked by four bits: one, one, one, and zero (1111) of this 32-bit number.
        </p>
        <p>
          The network is located in the address space 240.0.0.0-255.255.255.255.
        </p>
        <p>
          Reserved for future use.
        </p>
      </div>';
    }
}
