<?php
/**
 * Передача данных из браузера на сервер
 * при помощи GET запроса
 **/

// Читаем данные из массива $_GET
$user = isset($_GET['user']) ? $_GET['user'] : '';
$pass = isset($_GET['password']) ? $_GET['password'] : '';

// Если в $_GET есть нужная информация выводим приветствие
if ($user > '') {
	echo 'Hello, ' . $user . '!';
	echo '<br>';
	echo 'pass = ' . $pass;
}

?>

<!-- Форма для ввода данных пользователем -->
<form>
	<input type="text" name="user" value="<?= $user ?>">
	<input type="password" name="password">
	<input type="submit" value="ok">
</form>
