<?php
namespace padroes\estruturais\adapter;

use padroes\estruturais\adapter\Record as Record;

class RecordManager
{

  public function save(Record $record)
  {
  	echo __CLASS__;//return get_class($this);
  }
}
