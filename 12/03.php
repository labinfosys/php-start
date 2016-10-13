<?php
/**
 * Передача данных из браузера на сервер
 * при помощи POST запроса
 **/
var_dump($_GET);
var_dump($_POST);
?>

<!-- 
	Чтобы указать метод передачи данных используется 
	атрибут method. Может принимать значения GET или POST.
-->
<form method="POST">
	<input type="text" name="userInfo[name]">
	<input type="password" name="userInfo[password]">
	<select name="userInfo[gender]">
		<option value="1">М</option>
		<option value="2">Ж</option>
	</select>
	<input type="submit" value="ok">
</form>
