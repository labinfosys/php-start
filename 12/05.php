<?php
/**
 * Передача данных из браузера на сервер
 * при помощи смешанного POST и GET запроса
 **/
var_dump($_GET);
var_dump($_POST);
?>

<!-- 
Чтобы данные передавались сразу методом GET и POST
в аттрубуте action после адреса нужно указать данные
GET запроса в виде: ?param1=value1&param2=value2.
Но изменение этих данных из формы недоступно.
-->
<form method="POST" action="05.php?m=mixed">
	<input type="text" name="userInfo[name]">
	<input type="password" name="userInfo[password]">
	<select name="userInfo[gender]">
		<option value="1">М</option>
		<option value="2">Ж</option>
	</select>
	<input type="submit" value="ok">
</form>
