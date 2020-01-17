<?php 
require "view.php"; 
require "db.php"; 
$data = $_POST;
$id = 1;


  while($id != 16)
  {
          $new = R::findOne('news', 'id = '.$id);
          //$new = R::find('news');
      if($new->nazvanie != NULL) 
      {
        if( isset($data['knopka'.$id.'']) ) 
        {
              R::exec( 'UPDATE news SET nazvanie="'.$data['nazvanie'.$id.''].'", opisanie = "'.$data['opisanie'.$id.''].'" WHERE id = '.$id ); 
        }
    }
    $id++;
  }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Новости</title>
  </head>
  <body>
</body>
</html>
<form action="izmenit.php" method="POST">
<table border="1" cellpadding="1" cellspacing="1">
  <caption>редактровать</caption>
    <tr>
      <th>название</th>
  <th>описание</th>
  <th>изображение</th>
  <th>сохранить</th>
</tr>
    <tr>


    <?php
  $id = 1;
  while($id != 16) 
  {
    $new = R::findOne('news', 'id = '.$id); 
    if($new->nazvanie != NULL) 
    {
  $objView = new View('<img width="300" height="300" src="img/'.$new->izobrazhenie.'">', $new->nazvanie, $new->opisanie);
  echo '<td><input type="text" name="nazvanie'.$id.'" value="'.$objView->getnazvanie().'"></td>'; 
  //echo '<input type="text" name="nazvanie'.$id.'" value="0">'; 
 
    echo '<td><textarea name="opisanie'.$id.'" style="margin: 0px; width: 322px; height: 196px;">'.$objView->getopisanie().'</textarea></td>';

  echo '<td><img src="img/'.$new->izobrazhenie.'" width="150"></td>';

      echo '<td><button type="submit" style="height: 20px; width: 80px;" name="knopka'.$id.'">Сохранить</button></td></tr>'; 

    }
     
    $id++;
  }
?>


  </table>
</form>