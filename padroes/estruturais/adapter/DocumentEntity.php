<?php
namespace padroes\estruturais\adapter;

class DocumentEntity extends AbstractEntity implements IDocument{

  public function toDocument() {

  	 print 'Chegou até aqui. Class in '.__CLASS__.'<br>';
  }

}
