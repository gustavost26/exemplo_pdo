<?php
// Configuração da base de dados
$conn = new Database();
$conn->getConexao()->exec(file_get_contents('db.sql'));