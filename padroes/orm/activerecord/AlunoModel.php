<?php
namespace padroes\orm\activerecord;

use padroes\orm\datagateway\Aluno;
use padroes\orm\datamapper\AlunoMapper;

class AlunoModel extends Aluno
{
  private $dmAluno = null;

  /*public function setDm(AlunoMapper $dmAluno)
  {
    $this->dmAluno = $dmAluno;
  }
  */

  public function __construct(AlunoMapper $dmAluno)
  {
      $this->dmAluno = $dmAluno;
  }

  public function save()
  {
    $aluno = (null !== $this->getId()) ? $this->dmAluno->find($this->getId()) : $aluno = null;
    if ($aluno == null)
    {
      $this->dmAluno->insert($this);
    }
    else
    {
      $this->dmAluno->update($this);
    }
  }

  public function remove()
  {
    $this->dmAluno->delete($this);
    $this->setId(null);
    $this->setNome(null);
  }

}
