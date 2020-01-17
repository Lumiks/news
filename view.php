<?php

  class View
{
  private $nazvanie; //новость

  private $opisanie; 
  private $izobrazhenie; 
  
  public function __construct($izobrazhenie, $nazvanie, $opisanie) 
  {

  $this->izobrazhenie = $izobrazhenie;
    $this->nazvanie = $nazvanie;
    $this->opisanie = $opisanie;

  }
 
  public function getnazvanie()
  {
return $this->nazvanie; 
  
  }
 
  public function getopisanie() 
  {
return $this->opisanie; 
  
  }
 
  public function getizobrazhenie() 
  {
return $this->izobrazhenie;
  
  }
}

?>