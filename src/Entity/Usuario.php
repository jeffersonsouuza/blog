<?php

namespace Source\Entity;

use mysqli;

class Usuario
{
    private string $id;
    private string $email;
    private string $senha;
    private mysqli $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $email, string $senha): void
    {
        $insereUsuario = $this->mysql->prepare('INSERT INTO usuarios (email, senha) VALUES(?,?);');
        $insereUsuario->bind_param('ss', $email, $senha);
        $insereUsuario->execute();
    }

    public function exibirTodos(): array
    {
        return $this->mysql->query('SELECT email, senha FROM usuarios')->fetch_all(MYSQLI_ASSOC);
    }

    public function senhaEstaCorreta(string $senhaPura): bool
    {
        return password_verify($senhaPura, $this->senha);
    }
}