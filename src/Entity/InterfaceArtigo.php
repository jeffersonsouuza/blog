<?php

namespace Source\Entity;

interface InterfaceArtigo
{
    public function adicionar(string $titulo, string $conteudo, string $status): void;
    public function remover(string $id): void;
    public function exibirTodos(): array;
    public function procurarPorId(string $id): array;
    public function editar(string $id, string $titulo, string $conteudo, string $status): void;
}