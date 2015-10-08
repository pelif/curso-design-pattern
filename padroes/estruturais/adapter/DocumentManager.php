<?php
namespace padroes\estruturais\adapter;

class DocumentManager
{
  public function persist(array $document)
  {
  	print 'Chegou até aqui. Class in '.__CLASS__.'<br>';
    echo "<pre>";print_r($document);

  }
}
