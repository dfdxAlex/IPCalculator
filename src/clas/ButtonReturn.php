<?php
namespace src\clas;

class ButtonReturn
{
    public function __toString()
    {
        return 
               '<div class="interface-ip-calculator-div">
                 <form 
                   action="IPCalculator.php" 
                   method="post"
                 >
                   <input 
                     class="button-IP-Groups btn" 
                     name="button-IP-Groups-reset" 
                     type="submit" 
                     value="Вернуться к выбору"
                   >
                 </form>
               </div>';
    }
}
