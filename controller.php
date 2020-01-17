<?php

require "view.php"; 

  $id = 1;
  ////
  while($id != 16) 
  {
    $new = R::findOne('news', 'id = '.$id); 
    
//
    if($new->nazvanie != NULL) 
    {
          $objView = new View('<img width="300" height="300" src="img/'.$new->izobrazhenie.'">', $new->nazvanie, $new->opisanie);


              echo '<p>'.$objView->getizobrazhenie().'</p>'; 
          echo '<p>'.$objView->getnazvanie().'</p>';
          echo '<p>'.$objView->getopisanie().'</p>'; 
    }

// $objView->


    $id++;
  }
?>