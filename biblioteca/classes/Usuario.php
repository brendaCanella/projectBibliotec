<?php

// namespace biblioteca\classes;



class Usuario extends Pessoa
{
  private $id;

  public function __construct(float $id, string $nome, string $endereco, float $telefone)
  {

    parent::__construct($nome, $endereco, $telefone);
    $this->id = $id;
  }

  public function pegaId()
  {
    return $this->id;
  }

  public function defineId($id)
  {

    $this->id = $id;
  }
}
