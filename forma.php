<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Studio "Web-DECO" </title>
<style>
.shadowtext{
    text-shadow: 1px 3px 2px white, 0 0 1em red;
    color : #210042;
    font-size: 2em;
}
</style>
</head>
<body background="images/bg.jpg">

    <!-- =======================  Каркас сайта ===============wid========== -->
    <table border="1" align="center" cellpadding="10">
        <tr>
            <td background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5"><font size="5"><h1 class="shadowtext">Web-Studio "Web-DECO"</h1></td>
        </tr>
        <tr>
            <td colspan="2">
                <font size ="4"><b>
                <a href="#">Головна</a>&nbsp;&nbsp;
                <a href="#">Фотогалерея</a>&nbsp;&nbsp;
                <a href="#">Телефони</a>&nbsp;&nbsp;
                <a href="#">Статистика</a>&nbsp;&nbsp;
                <a href="#">Зареєстровані</a>&nbsp;&nbsp;
                </b></font>
            </td>
        </tr>
        <tr>
            <td width="30%" valign="top">
                <font size="5" color="navy"><h2>Новини</h2></font>
                    <font size ="5">
                <ul>
                    <li><a href="#">Сайт будівельної компанії</a></li>
                    <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
                    <li><a href="#">Сайт-Візитка дизайнера інтерфейсів</a></li>
                    <p align="right"><a href="#">Інші...</a></p>
                </ul>
                </font>
            <hr>
    <H1 align="center"><font color="green">Реєстрація</font></H1>
      <form action="forma.php" method="post" onsubmit="return send() ;">
    <TABLE align="center" bgcolor="#ccc">
    <TR>
    <TD><font color="green">Surname</font>: </TD>
    <TD><input type="text" size="10" maxlength="20" name="name2"> </TD>
    </TR>
    <TR>
        <TD><font color="green">Name</font>: </TD>
        <TD><input type="text" size="10" maxlength="20" name="name1"> </TD>
    </TR>
    <TR>
        <TD><font color="green">E-Mail</font>: </TD>
        <TD><input type="email" size="10" maxlength="20" name="email"> </TD>
    </TR>
    <TR>
        <TD><font color="green">Password</font>: </TD>
        <TD><input type="password" size="10" maxlength="20" name="password"> </TD>
        </TR>
    </TABLE> 
    <p align="center">
        <input type="submit" value="Зареєструватись" >
        <input type="reset" value="Очистити" >
    </p>
        </form>
    <hr>
            </td>
            <td width="70%" valign='top'>
<h1 align=center>Дякуємо за реєстрацію !</h1>
    <?php

    $st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";
    $fp = fopen("baza.txt","a");

    $test = fwrite($fp,$st);
    echo "<h1 align='center'>".$_POST['name2']." ".$_POST['name1']."<br>Дякуємо за реєстрацію !</h1>";
    echo "<h2 align='center' > на Ваш E-Mail : ".$_POST['email']."<br> відправлено повідомлення.</br>";
    ?>
</h1>
            </td>
        </tr>
        <tr>
            <td background ="images/bg-3.jpg" colspan="2" valign="middle" height="90">
                <font size="4">Сайт розробив "Богачук Максим"</font>
            </td>
        </tr>
    </table>
    <!-- ============================================================= -->

</body>
</html>
