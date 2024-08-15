<?php

namespace app\Entity\Artigos;

class Status
{
    public const ATIVO = 1;
    public const INATIVO = 2;

    public static function name(int $status): string
    {
        return match ($status) {
            self::ATIVO => 'Ativo',
            self::INATIVO => 'Inativo',
            default => 'Desconhecido',
        };
    }
}
