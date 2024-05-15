<?php
require_once './biblioteca/classes/Pessoa.php';
require_once './biblioteca/classes/Usuario.php';
require_once './biblioteca/classes/Livros.php';
require_once './biblioteca/classes/Biblioteca.php';

$biblioteca = new Biblioteca();

$usuario1 = new Usuario(1, "Leonardo", "Rua Rosa", "999785824");
$usuario2 = new Usuario(2, "Gabrielle", "Rua da Água", "98402310");
$usuario3 = new Usuario(3, "Juma", "Rua Azul", "78945668");

$biblioteca->adicionarUsuario($usuario1);
$biblioteca->adicionarUsuario($usuario2);
$biblioteca->adicionarUsuario($usuario3);


$livro1 = new Livros("Alice no país das maravilhas", "Lewis Caroll");
$livro2 = new Livros("Sitio do Pica Pau", "Monteiro Lobato");
$livro3 = new Livros("Orgulho e Preconceito", "Jane Austen");

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);



// aqui tem a opção de você remover o usuário e os livros que desejar

// echo "removendo livro..." . PHP_EOL;
// $biblioteca->removerLivro($livro1);


// echo "removendo usuário..." . PHP_EOL;
// $biblioteca->removerUsuario($usuario1);


// aqui você lista os usuários e os livros que você adicionou

// echo "Usuários:" . PHP_EOL;
// $biblioteca->listarUsuarios();


echo PHP_EOL . "Livros:" . PHP_EOL;
$biblioteca->listarLivros();



// Aqui você empresta e devolve os livros que desejar
echo PHP_EOL . "Emprestando Livro:" . PHP_EOL;
$biblioteca->emprestarLivro($usuario3, $livro1);

echo PHP_EOL . "Livros emprestados:" . PHP_EOL;
$biblioteca->listarLivros();

echo PHP_EOL . "Devolvendo Livro:" . PHP_EOL;
$biblioteca->devolverLivro($usuario3, $livro2);

echo PHP_EOL . "Livros devolvidos:" . PHP_EOL;
$biblioteca->listarLivros();
