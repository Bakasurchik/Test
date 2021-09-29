<?php 
echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>WORLD BANK калькулятор</title>
        <link rel=\"stylesheet\" href=\"styles.css\">
    </head>
    <body>
        <div id=\"header\">
            <div id=\"contacts\">
                <h2>8-800-100-5005<br>+7(3452)522-000</h2>
            </div>
            <a href=\"index.html\"><img src=\"images/worldbank.jpg\" alt=\"World\"><h2 id=\"name\">WORLD BANK<br>Publications</h2></a>

            <div id=\"nav\">
                <ul id=\"mainmenu\">
                    <li style=\"border-right: none !important;\">
                        <a href=\"#\">Кредитные карты</a>
                    </li>
                    <li style=\"background-color: #eb5017;\">
                        <a href=\"#\">Вклады</a>
                    </li>
                    <li>
                        <a href=\"#\">Дебетовая карта</a>
                    </li>
                    <li>
                        <a href=\"#\">Страхование</a>
                    </li>
                    <li>
                        <a href=\"#\">Друзья</a>
                    </li>
                    <li style=\"border-right: none !important;\">
                        <a href=\"#\">Интернет-банк</a>
                    </li>
                </ul>
            </div>
            <div>
                <ul id=\"breadcrumb\">
                    <li><a href=\"#\">Главная</a></li>
                    <li><a href=\"#\">Вклады</a></li>
                    <li><a href=\"#\" style=\"text-decoration: none !important;\">Калькулятор</a></li>
                </ul>
            </div>
        </div>
        <div id=\"main\">
            <form>
                <h1>Калькулятор</h1>
                <div id=\"calc\">
                    <p>
                        <label for=\"date\">Дата оформления вклада</label>
                        <input type=\"date\" id=\"date\">
                    </p>
                    <p>
                        <label for=\"deposit\">Сумма вклада</label>
                        <input type=\"number\" id=\"deposit\" minlength=\"1000\" maxlength=\"3000000\" value=\"10000\">
                    </p>
                    <p>
                        <label for=\"term\">Срок вклада</label>
                        <input list=\"termlist\" type=\"text\" placeholder=\"1 год\">
                    </p>
                    <p style=\"padding-right: 25px;\">
                        <label for=\"replenishment\" >Пополнение вклада</label>
                        <input type=\"radio\" value=\"Нет\" checked id=\"replenishment\" name=\"replenishment\">Нет
                        <input type=\"radio\" value=\"Да\" id=\"replenishment\" name=\"replenishment\">Да
                    </p>
                    <p>
                        <label for=\"depositrep\">Сумма пополнения вклада</label>
                        <input type=\"number\" id=\"depositrep\" minlength=\"1000\" maxlength=\"3000000\" value=\"10000\">
                    </p>
                    <p style=\"padding-top: 25px;\">
                        <button type=\"submit\" formmethod=\"POST\" formaction=\"calc.php\"><b>Рассчитать</b></button>
                    </p>
                    <datalist id=\"termlist\">
                        <option value=\"1 год\"></option>
                        <option value=\"2 года\"></option>
                        <option value=\"3 года\"></option>
                        <option value=\"4 года\"></option>
                        <option value=\"5 лет\"></option>
                    </datalist>
                </div>
            </form>
        </div>
        <div id=\"footer\">
            <div id=\"fnav\">
                <ul>
                    <li>
                        <a href=\"#\">Кредитные карты</a>
                    </li>
                    <li>
                        <a href=\"#\">Вклады</a>
                    </li>
                    <li>
                        <a href=\"#\">Дебетовая карта</a>
                    </li>
                    <li>
                        <a href=\"#\">Страхование</a>
                    </li>
                    <li>
                        <a href=\"#\">Друзья</a>
                    </li>
                    <li>
                        <a href=\"#\">Интернет-банк</a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>";