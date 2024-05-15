<?php

// namespace biblioteca\classes;

class Pessoa
{
  private string $nome;
  private string  $endereco;
  private string $telefone;

  public function __construct(string $nome, string $endereco, string $telefone)
  {
    $this->nome = $nome;
    $this->endereco = $endereco;
    $this->telefone = $telefone;
  }


  public function pegaNome()
  {
    return $this->nome;
  }

  public function defineNome($nome)
  {
    $this->nome = $nome;
  }

  public function pegaEndereco()
  {
    return $this->endereco;
  }

  public function defineEndereco($endereco)
  {
    $this->endereco = $endereco;
  }

  public function pegaTelefone()
  {
    return $this->telefone;
  }

  public function defineTelefone($telefone)
  {
    $this->telefone = $telefone;
  }
}
