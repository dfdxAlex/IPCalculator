<?php
namespace src\clas;

class TextStart
{
    public function __toString()
    {
        return '<h3>Class network parameters '.$_SESSION['button-IP-Groups'].'</h3>
        <p>The entire address space is 32 bits.
        It is written in decimal form and consists of 4 single-byte numbers,
        separated by a dot, but the computer accepts them as 32 bits in one
        meaning.</p>';
    }
}
