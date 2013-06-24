<?php
require_once('Database.php');
require_once('configuracao.php');


/*  ---------------- TEST ---------------- */

// ID de busta do usuário.
$id = 1;

$conn = new Database();

// Prepara um comando para execução e retorna um objeto de declaração
$stm = $conn->getConexao()->prepare('SELECT * FROM `usuarios` WHERE `id` = :id');

// Constantes PDO::PARAM_*
// http://php.net/manual/pt_BR/pdostatement.bindvalue.php
// http://php.net/manual/pt_BR/pdo.constants.php
$stm->bindValue(':id', $id, PDO::PARAM_INT);

// Executa um comando preparado
if( $stm->execute() ) {

    // linha de um conjunto de resultados associado a um objeto PDOStatement
    $resultado = $stm->fetch(PDO::FETCH_ASSOC);

    print_r($resultado);
}