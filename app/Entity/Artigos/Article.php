<?php

namespace app\Entity\Artigos;

use app\Entity\InterfaceArtigo;
use mysqli;

class Article implements InterfaceArtigo
{
    private mysqli $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $titulo, string $conteudo, string $status): void
    {
        $insereArtigo = $this->mysql->prepare('INSERT INTO artigos (titulo, conteudo, status) VALUES(?,?,?);');
        $insereArtigo->bind_param('sss', $titulo, $conteudo, $status);
        $insereArtigo->execute();
    }

    public function remover(string $id): void
    {
        $removerArtigo = $this->mysql->prepare('DELETE FROM artigos WHERE id=?');
        $removerArtigo->bind_param('s', $id);
        $removerArtigo->execute();
    }

    public function exibirTodosComPaginacao($inicio, $limite): array
    {
        return $this->mysql->query('SELECT * FROM artigos order by id desc LIMIT '.$inicio.','. $limite)->fetch_all(MYSQLI_ASSOC);
    }

    public function exibirTodos(): array
    {
        return $this->mysql->query('SELECT id, conteudo, titulo, status FROM artigos')->fetch_all(MYSQLI_ASSOC);
    }

    public function procurarPorId(string $id): array
    {
        $selecionaAartigo = $this->mysql->prepare('SELECT id, conteudo, titulo, status FROM artigos WHERE id = ?');
        $selecionaAartigo->bind_param('s', $id);
        $selecionaAartigo->execute();
        return $selecionaAartigo->get_result()->fetch_assoc();
    }

    public function editar(string $id, string $titulo, string $conteudo, string $status): void
    {
        $editaArtigo = $this->mysql->prepare('UPDATE artigos SET titulo = ?, conteudo = ?, status = ? WHERE id = ?');
        $editaArtigo->bind_param('ssss', $titulo, $conteudo, $status, $id);
        $editaArtigo->execute();
    }
}




