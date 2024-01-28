<?php
namespace src\clas;

class InterfaceForUser
{
    // функция определяет можно ли показывать меню пользователя
    public function showUserMenu()
    {
        if ($_SESSION['button-IP-Groups']!='z') 
            return false;
        if ($_SESSION['ipSSIDR']!=-1) 
            return false;
        return true;
    }

    public function __toString()
    {
        return 
               '<div class="interface-ip-calculator-div">
                  <form action="IPCalculator.php" method="post">
                    <p class="IP-Groups-p">
                      Select network class
                    </p>
                    <div class="select-IP-Groups-div">
                      <select 
                        name="IP_From_Group" 
                        class="select-IP-Groups"
                      >
                        <option value="A">
                          Class A
                        </option>
                        <option value="B">
                          Class B
                        </option>
                        <option value="C">
                          Class C
                        </option>
                        <option value="D">
                          Class D
                        </option>
                        <option value="E">
                          Class E
                        </option>
                      </select>
                    </div>
                    <input 
                      class="button-IP-Groups btn" 
                      name="button-IP-Groups" 
                      type="submit" 
                      value="Show characteristics"
                    >
                  </form>
                </div> 
                <div class="IPV4-CIDR">
                  <form action="IPCalculator.php" method="post">
                    <h3>IPV4 CIDR</h3>
                    <p>IP</p>
                    <input 
                      type="text" 
                      name="ipS1" 
                      placeholder="0" 
                      class="ipS"
                    >
                    <input 
                      type="text" 
                      name="ipS2" 
                      placeholder="0" 
                      class="ipS"
                    >
                    <input 
                      type="text" 
                      name="ipS3" 
                      placeholder="0" 
                      class="ipS"
                    >
                    <input 
                      type="text" 
                      name="ipS4" 
                      placeholder="0" 
                      class="ipS"
                    >
                    <span> / </span>
                    <input 
                      type="text" 
                      name="ipSmask" 
                      placeholder="0" 
                      class="ipS"
                    >
                    <input 
                      type="submit" 
                      name="ipSSIDR" 
                      value="Calculation" 
                      class="button-ipS 
                      btn"
                    >
                    <br>
                    <br>
                    <p>Network mask as 4 bytes</p>
                    <input 
                      type="text" 
                      name="mask1" 
                      placeholder="0" 
                      class="ipS"
                    >
                    <input 
                      type="text" 
                      name="mask2" 
                      placeholder="0" 
                      class="ipS"
                    >
                    <input 
                      type="text" 
                      name="mask3" 
                      placeholder="0" 
                      class="ipS"
                    >
                    <input 
                      type="text" 
                      name="mask4" 
                      placeholder="0" 
                      class="ipS"
                    >
                  </form>
                </div>';
    }
}
