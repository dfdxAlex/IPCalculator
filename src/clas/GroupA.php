<?php
namespace src\clas;

class GroupA
{
    public function __toString()
    {
        return '<div class="network-parameter">
                  <p>
                    A network of this class is marked with a zero in the first bit of this
                    32-bit number.
                  </p>
                  <p>
                    The remaining 31 bits contain information about the address of the network itself
                    and about a specific host (computer)
                  </p>
                  <p>
                    The address of this network is specified by the first byte, and as it is
                    the first bit is always occupied by zero, then to determine the address
                    That leaves 7 bits or 127 different addresses.
                  </p>
                  <p>
                    The remaining 3 numbers or 24 bits specify the host address.
                    There can be 16,777,216 hosts in this network
                  </p>
                  <h4>Summary:</h4>
                  <p>The number of Type A networks with IPv4 addresses can be 127</p>
                  <p>
                    Number of hosts or users on a type A network with addresses
                    IPv4 can be 16,777,216
                  </p>
                </div>';
    }
}
