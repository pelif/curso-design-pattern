<?php
namespace padroes\orm\datamapper;

use padroes\orm\datagateway\Aluno;
use padroes\orm\datagateway\Alunos;
use padroes\orm\datamapper\Db;

class AlunoMapper
{
  /**
   * @var Db
   */
  private $db = null;

  public function __construct(Db $db)
  {
    $this->db = $db;
  }

  public function find($id)
  {
    return $this->fetchAll("id = $id")->current();
  }

  public function fetchAll($where = null)
  {
    $where = (null === $where) ? '' : " WHERE $where";
    $sql = "SELECT * FROM teste.Aluno {$where}";
    $rs = $this->db->query($sql);
    $alunos = new Alunos(array());
    foreach ($rs as $row)
    {
      $aluno = new Aluno();
      $aluno->setId($row['id']);
      $aluno->setNome($row['nome']);
      $aluno->setEndereco($row['endereco']);
      $aluno->setTelefone($row['telefone']);
      $aluno->setCidade($row['cidade']);

      $alunos->append($aluno);
      unset($aluno);
    }
    
    return $alunos;
  }

  public function insert(Aluno $aluno)
  {
    $sql = "INSERT INTO teste.Aluno (nome, endereco, telefone, cidade) VALUES
    ('{$aluno->getNome()}', '{$aluno->getEndereco()}', '{$aluno->getTelefone()}',
    '{$aluno->getCidade()}')";

    return $this->db->exec($sql);
  }

  public function update(Aluno $aluno)
  {
    $sql = "UPDATE teste.Aluno
            SET nome = '{$aluno->getNome()}',
                endereco = '{$aluno->getEndereco()}',
                telefone = '{$aluno->getTelefone()}',
                cidade = '{$aluno->getCidade()}'
            WHERE id = {$aluno->getId()}";
    return $this->db->exec($sql);
  }

  public function delete(Aluno $aluno)
  {
    $sql = "DELETE FROM teste.Aluno WHERE id = {$aluno->getId()}";
    return $this->db->exec($sql);
  }

}
