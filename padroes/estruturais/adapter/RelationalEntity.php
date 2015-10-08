<?php
namespace padroes\estruturais\adapter;

class RelationalEntity extends AbstractEntity implements IRelational
{

  public function toRecord()
  {
  	print 'Chegou até aqui. Class in '.__CLASS__."<br>";
    //return null;
  }

}
