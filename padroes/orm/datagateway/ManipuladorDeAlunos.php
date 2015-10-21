<?php
namespace padroes\orm\datagateway;

//use padroes\orm\datagateway\Alunos;
use padroes\orm\datagateway\Aluno;

class ManipuladorDeAlunos
{
  public static function criarAlunosAleatoriamente()
  {
    //$alunos = new Alunos();
    $alunos = new \ArrayIterator();

    for ($i = 1; $i <= 10; $i++)
    {
      $aluno = new Aluno();
      $aluno->setId($i * 1000);
      $aluno->setNome('aluno ' . ($i * 1000));
      $aluno->setEndereco('End ' . rand());
      $aluno->setTelefone('7788-9910')
      $aluno->setCidade('São Paulo');

      $alunos->append($aluno);
    }

    foreach ($alunos as $aluno)
    {
      echo $aluno->getNome() . "\n";
    }
  }

}
