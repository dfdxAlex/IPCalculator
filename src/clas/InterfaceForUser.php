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
                      Выбрать класс сети
                    </p>
                    <div class="select-IP-Groups-div">
                      <select 
                        name="IP_From_Group" 
                        class="select-IP-Groups"
                      >
                        <option value="A">
                          Класc A
                        </option>
                        <option value="B">
                          Класс B
                        </option>
                        <option value="C">
                          Класс C
                        </option>
                        <option value="D">
                          Класс D
                        </option>
                        <option value="E">
                          Класс E
                        </option>
                      </select>
                    </div>
                    <input 
                      class="button-IP-Groups btn" 
                      name="button-IP-Groups" 
                      type="submit" 
                      value="Показать характеристики"
                    >
                  </form>
                </div> 
                <div class="IPV4-CIDR">
                  <form action="IPCalculator.php" method="post">
                    <h3>IPV4 CIDR</h3>
                    <p>IP адрес</p>
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
                      value="Считаем" 
                      class="button-ipS 
                      btn"
                    >
                    <br>
                    <br>
                    <p>Маска сети в виде 4 байт</p>
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
