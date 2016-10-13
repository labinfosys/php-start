<?php
/**
 * Загрузка файла на сервер
 **/

// Это просто, чтобы увидеть, что получим в $_POST
var_dump($_POST);

// Загруженные файлы будут в массиве $_FILES
var_dump($_FILES); 

// Папка для файлов
$uploadDir = __DIR__ . '/uploads';

// Если в $_FILES есть нужный элемент - обрабатываем
if (isset($_FILES['picture'])) {
	// Полученный файл нужно переложить из временной папки
	// при помощи move_uploaded_file
	$uplRes = @move_uploaded_file(
		$_FILES['picture']['tmp_name'], 
		$uploadDir . '/' . $_FILES['picture']['name']
	);
	// Если файл переложился успешно - запомним его адрес
	if ($uplRes) {
		$picture = 'uploads/' . $_FILES['picture']['name'];
	}
}
?>
<!-- При наличии нового файла выведем его картинкой HTML -->
<!-- (для наглядности загружаем картинки) -->
<?php if (isset($picture)) : ?>
	<img src="<?= $picture ?>" width="100">
<?php endif; ?>

<!-- 
В форме, которая передаёт файлы обязательно используется метод POST
и указывается атрибут enctype="multipart/form-data"
-->
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="picture">
	<input type="submit" value="ok">
</form>
