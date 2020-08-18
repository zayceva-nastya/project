<?php

?>
<form action="?type=signup&action=add" method="post">
    <label> Логин <input type="text" name="login"></label>
    <label> Пароль <input type="text" name="password"></label>
    <lablel>ФИО <input type="text" name="FIO"></label>
        <label>Вес <input type="text" name="weight"></label>
        <label> Рост <input type="text" name="growth"></label>
        <label>Пол<select name="gender">
                <option>М</option>
                <option>Ж</option>
            </select></label>
        <input type="submit" value="ok">
</form>