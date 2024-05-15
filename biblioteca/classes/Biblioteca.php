<?php


class Biblioteca

{
  private $usuarios;
  private $livros;




  public function __construct()
  {
    $this->usuarios = [];
    $this->livros = [];
  }

  public function adicionarUsuario(Usuario $usuario)
  {
    $this->usuarios[] = $usuario;
  }




  public function removerUsuario(Usuario $usuario)
  {

    $indice = array_search($usuario, $this->usuarios);


    if ($indice !== false) {
      unset($this->usuarios[$indice]);
      echo "usuário removido com sucesso!" . PHP_EOL;
    } else {
      echo "usuário não encontrado." . PHP_EOL;
    }
  }



  public function listarUsuarios()
  {
    foreach ($this->usuarios as $usuario) {
      echo "ID: " . $usuario->pegaId() . ", Nome: " . $usuario->pegaNome() . PHP_EOL;
    }
  }


  public function adicionarLivro(Livros $livro)
  {
    $this->livros[] = $livro;
  }


  public function removerLivro(Livros $livro)
  {
    $indice = array_search($livro, $this->livros);

    if ($indice !== false) {
      unset($this->livros[$indice]);
      echo "Livro removido com sucesso!" . PHP_EOL;
    } else {
      echo "Livro não encontrado na biblioteca." . PHP_EOL;
    }
  }



  public function listarLivros()
  {
    foreach ($this->livros as $livro) {
      echo "Título: " . $livro->pegaTitulo() . ", Autor: " . $livro->pegaAutor() . PHP_EOL;
    }
  }


  public function emprestarLivro(Usuario $usuario, Livros $livro)
  {
    if (!$livro->estaEmprestado()) {
      $livro->setEmprestado(true);
      echo "Livro: " . $livro->pegaTitulo() . " emprestado para " . $usuario->pegaNome() . PHP_EOL;
    } else {
      echo "Livro " . $livro->pegaTitulo() . " já foi emprestado." . PHP_EOL;
    }
  }

  public function devolverLivro(Usuario $usuario, Livros $livro)
  {
    if ($livro->estaEmprestado()) {
      $livro->setEmprestado(false);
      echo "Livro " . $livro->pegaTitulo() . " devolvido por " . $usuario->pegaNome() . PHP_EOL;
    } else {
      echo "Livro " . $livro->pegaTitulo() . " não consta como emprestado." . PHP_EOL;
    }
  }
}
