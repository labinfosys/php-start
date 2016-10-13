<?php
/**
 * Структура массива $_GET.
 * $_GET - может быть многомерным массивом.
 * Это можно использовать для того, чтобы 
 * сгруппировать передаваемые данные.
 **/

// Это просто, чтобы посмотреть в каком формате приходят данные
var_dump($_GET); 
?>

<h1>Регистрация пользователя</h1>
<form>
	<h2>Общая информация</h2>
	<input type="text" name="userInfo[name]"><br>
	<input type="password" name="userInfo[password]"><br>
	<select name="userInfo[gender]">
		<option value="1">М</option>
		<option value="2">Ж</option>
	</select><br>
	<h2>Контакты</h2>
	<input type="email" name="userContacts[email]"><br>
	<input type="tel" name="userContacts[phone]"><br>
	<input type="submit" value="ok">
</form>
