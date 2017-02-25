<?php

$json = file_get_contents('phone.json');

$number_array = json_decode($json, true);
// Повторяющиеся ключи складываем в отдельный массив
$keys_array = array_keys($number_array[0]);
	
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Создание телефонной книги</title>
    <style>
      table, td, th { border: 1px solid black; border-collapse: collapse;}
	 
    </style>
  </head>
  <body>

    <h2>Адреса и телефоны</h2>

    <table>
	<tr>
	<?php for($k=0; $k<count($keys_array); $k++){ ?>
	<th><?php echo $keys_array[$k]; ?></th>
	<?php } ?>
	</tr>
	
	<?php foreach($number_array as $value): ?>
	<tr>
		<?php foreach($value as $item) : ?>
			<td><?= $item; ?></td>
		<?php endforeach; ?>
	</tr>
      
    <?php endforeach; ?>

	</table>

  </body>
</html>