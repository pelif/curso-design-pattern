<?php
namespace padroes\orm\datagateway;

class Aluno
{
  private $id;
  private $nome;
  private $endereco;
  private $telefone;
  private $cidade;

  public function setId($id)
  {
      $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setEndereco($endereco)
  {
      $this->endereco = $endereco;
  }

  public function getEndereco()
  {
      return $this->endereco;
  }

  public function setTelefone($telefone)
  {
      $this->telefone = $telefone;
  }

  public function getTelefone()
  {
      return $this->telefone;
  }

  public function setCidade($cidade)
  {
      $this->cidade = $cidade;
  }

  public function getCidade()
  {
      return $this->cidade;
  }

}
