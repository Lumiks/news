  <?php
require "db.php"; 

  $data = $_POST;
//       $new = R::dispense('news'); 
//     $new->name_new = $name_new; 
  //     $new->opisanien = $opisanie; 
  //     $new->izobrazhenie = $izobrazhenie; 
  //     R::store($new); //запись вбд
  if( isset($data['sozd']) ) 
  {
  		$new = R::dispense('news'); 
  		$new->nazvanie = $data['nazvanie']; 
  		$new->opisanie = $data['opisanie']; 
  		$new->izobrazhenie = $data['izobrazhenie']; 
  		R::store($new); //запись вбд
  		header ('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создание новости</title>
</head>
<body>
	<form action="sozdat.php" method="POST"> 
			   <label>Название новости:</label>
			<input type="text" name="nazvanie"> 

			   <label>Описание:</label>
			<input type="text" name="opisanie">

			<label>Изображение к новости:</label>
		<input type="file" name="izobrazhenie">
			     <center><button type="submit" name="sozd">Создать новоть</button></center>
	</form>
</body>
</html>