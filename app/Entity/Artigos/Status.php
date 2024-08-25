<?php

namespace app\Entity\Artigos;

class Status
{
    public const ATIVO = 1;
    public const INATIVO = 2;

    public static function name(int $status): string
    {
        global $lang;
        return match ($status) {
            self::ATIVO => $lang['active'],
            self::INATIVO => $lang['inactive'],
            default => $lang['unknown'],
        };
    }
}
