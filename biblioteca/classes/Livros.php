<?php



class Livros
{
  private string $titulo;
  private string $autor;
  private bool $emprestado;


  public function __construct(string $titulo, string $autor)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->emprestado = false;
  }

  public function pegaTitulo()
  {
    return $this->titulo;
  }

  public function defineTitulo($titulo)
  {
    $this->titulo = $titulo;
  }


  public function pegaAutor()
  {
    return $this->autor;
  }

  public function defineAutor($autor)
  {
    $this->titulo = $autor;
  }

  public function estaEmprestado()
  {
    return $this->emprestado;
  }

  public function setEmprestado($emprestado)
  {
    $this->emprestado = $emprestado;
  }
}
